<?php
class UsersController extends AppController{
    var $name='Users';
    var $helpers = array('Html','Form');
    var $components=array('Auth','Session');

    function beforeFilter(){
            $this->Auth->allow('register');
        }
    function index(){
        pr($this->data);
        $this->redirect(array('controller'=>'assessments','action'=>'index'));
    }
    function login(){

        if(!empty($this->data)){
                       if($this->Auth->login($this->data)){
                       $this->redirect(array('controller'=>'assessments','action'=>'index'));
                     }
             }
    }
    function logout(){
            $this->redirect($this->Auth->logout());
    }


    function register(){
        if (!empty($this->data)) {
            pr($this->data);
            if($this->data['User']['password']==$this->Auth->password($this->data['User']['retype_password'])){
        	    	$this->User->create();
        			if ($this->User->save($this->data)) {
        				$this->Session->setFlash('The User has been saved', true);
        				$this->redirect(array('action' => 'login'));
        			}else {
        			    $this->Session->setFlash('The User could not be saved. Please, try again.', true);
        			      }
            }else {
        		$this->Session->setFlash('The User could not be saved. Please, try again.', true);
            }
        		}

    }

}
?>