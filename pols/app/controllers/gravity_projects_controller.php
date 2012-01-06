<?php
class GravityProjectsController extends AppController{
	var $name='GravityProjects';
	var $helpers = array('Html','Form');
	var $components = array('Session');
	var $key='baee186cd1cfeb01fcacaee4964705440d415142820f48ba732617dce818205c';
	function index(){

	}
	function curl($url){
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, 'https://www.gravitydev.com/api/project'.$url.'?key='.$this->key);
		$result = curl_exec($ch);
		return json_decode($result , true);
	}
	function fetchData(){
		//
		$url=array('','/stories','/issues');
		//$url=$this->data['GravityProject']['url'];
		//$key=$this->data['GravityProject']['key'];
		$obj_project = $this->curl($url[0]);
		$obj_story = $this->curl($url[1]);
		$obj_issue = $this->curl($url[2]);
		$result = array($obj_project,$obj_story,$obj_issue);
		$this->set('result',$result);
		return $result;


	}
	function saveData(){
		$result=$this->fetchData();
		$this->log($result);
		$this->GravityProject->create();
		$this->GravityProject->set('project_name',$result[0]['name']);
		$this->GravityProject->set('start_date',$result[0]['start_date']);
		if($result[0]['is_public']=='no'){
			$this->GravityProject->set('is_public','0');
		}elseif($result[0]['is_public']=='yes'){
			$this->GravityProject->set('is_public','1');
		}
		$this->GravityProject->set('total_no_stories',$result[1]['total']);
		$this->GravityProject->set('total_no_issues',$result[2]['total']);
		$this->GravityProject->saveAll();
		$this->Session->setFlash('The project details has been saved', true);
		$this->redirect(array('action'=>'index'));

	}

/*
echo $result[0]['name'];
	echo '<br/>';
	echo $result[0]['start_date'];
	echo '<br/>';
	echo '<br/>';
	//participants
	$i=1;
	foreach( $result[0]['participants'] as $key=>$name ){
		echo $i.') '.$name['name'];
		echo '<br/>';
		$i++;
	}

*/

}
