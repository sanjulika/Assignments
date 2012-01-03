<?php
class ResultsController extends AppController {

	var $name = 'Results';

	function index() {
		$this->Result->recursive = 0;
		$this->set('results', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid result', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('result', $this->Result->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Result->create();
			if ($this->Result->save($this->data)) {
				$this->Session->setFlash(__('The result has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The result could not be saved. Please, try again.', true));
			}
		}
		$students = $this->Result->Student->find('list');
		$options = $this->Result->Option->find('list');
		$this->set(compact('students', 'options'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid result', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Result->save($this->data)) {
				$this->Session->setFlash(__('The result has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The result could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Result->read(null, $id);
		}
		$students = $this->Result->Student->find('list');
		$options = $this->Result->Option->find('list');
		$this->set(compact('students', 'options'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for result', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Result->delete($id)) {
			$this->Session->setFlash(__('Result deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Result was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>