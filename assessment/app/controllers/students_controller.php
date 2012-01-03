<?php
class StudentsController extends AppController{
    var $name='Students';
    var $helpers = array('Html','Form','Session');
    function index(){
        $this->set('students', $this->Student->find('all'));
    }
    function add(){
        if (!empty($this->data)) {
        			$this->Student->create();
        			if ($this->Student->save($this->data)) {
        				$this->Session->setFlash('The Student has been saved', true);
        				$this->redirect(array('action' => 'index'));
        			} else {
        				$this->Session->setFlash('The Student could not be saved. Please, try again.', true);
        			}
        		}
    }

}
?>