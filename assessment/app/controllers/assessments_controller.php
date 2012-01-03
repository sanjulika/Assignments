<?php
class AssessmentsController extends AppController{
    var $name='Assessments';
    var $helpers = array('Html','Form','Session');
    function index(){
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
    function random(){
        $random = $this->Assessment->Question->find('list',
         array(
         'order'=>'rand()'
         )
        );
        //$this->view($random['Question']['id']);
        $this->view($random);
        $this->render('view');
    }
    function view(){
       //$this->log('wrong','debug');
        //$this->Assessment->id=$id;
        $this->set('Question.id',array('order'=>rand()));
        $this->set('questions',$this->Assessment->Question->find('all'));

    }
}
?>