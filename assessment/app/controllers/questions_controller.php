<?php
class QuestionsController extends AppController{
    var $name='Questions';
    var $helpers = array('Html','Form');
    var $components =array('session');
    //public $count=0;

    function index(){
       $this->set('questions',$this->Question->find('all'));

    }
    function add(){

        if (!empty($this->data)) {
            pr($this->data);
            //echo $this->data['Question']['answer'];
            $option=$this->data['Option'][$this->data['Question']['answer']]['option'];
                echo $option."<br/>";
            $this->Question->create();
            if ($this->Question->saveAll($this->data)) {
                $q_id=$this->Question->getLastInsertID();
                echo  $q_id;
                $option_id=$this->Question->Option->find('first',
                    array(
                        'conditions'=>array(
                            'Option.question_id' => $q_id,
                             'Option.option'=>$option
                        )
                    )
                );
                echo $option_id['Option']['id'];
                $this->Question->Answer->set('option_id',$option_id['Option']['id']);
                $this->Question->Answer->set('question_id',$q_id);
                $this->Question->Answer->saveAll();
                $this->Session->setFlash('The question has been saved', true);
                $this->redirect(array('action' => 'index',$this->Question->assessment_id));
            } else {
                $this->Session->setFlash('The question could not be saved. Please, try again.', true);
            }
        }
        $this->set('assessments',$this->Question->Assessment->find('list',array('fields'=>array('Assessment.topic'))));
    }


    function view($id,$count){
        $this->Question->Assessment->id=$id;
        $this->set('ass_id',$this->Question->Assessment->id);
        //$count=$this->session->read('data');
        $this->log($count);
        $this->set('count',$count);
        $total_questions=$this->Question->find('count',array('conditions'=>array(
            'assessment_id'=>$id
        )));
        $this->set('questions',$this->Question->find('first',array(
            'conditions'=>array(
            'assessment_id'=>$id,
            'question_id'=>rand(1,$total_questions)
        )
        )));

    }
//'order'=>array('rand()'),

}


?>