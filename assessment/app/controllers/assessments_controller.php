<?php
class AssessmentsController extends AppController{
    var $name='Assessments';
    var $helpers = array('Html','Form');
    var $components = array('Auth','Session');
    function index(){
        $username = $this->Auth->user('name');
        $this->set('user_id',$username);
        //$this->log($username);
        $this->set('assessments', $this->Assessment->find('all'));

    }
    function add(){
            if (!empty($this->data)) {
            			$this->Assessment->create();
            			if ($this->Assessment->save($this->data)) {
            				$this->Session->setFlash(__('The Assessment has been saved', true));
            				$this->redirect(array('action' => 'index'));
            			} else {
            				$this->Session->setFlash(__('The Assessment could not be saved. Please, try again.', true));
            			}
            		}
        }

}
?>