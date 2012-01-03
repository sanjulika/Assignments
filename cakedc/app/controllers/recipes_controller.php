<?php
class RecipesController extends AppController {

	var $name = 'Recipes';

	function index() {
		$this->Recipe->recursive = 0;
		$this->set('recipes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid recipe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recipe', $this->Recipe->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Recipe->create();
			if ($this->Recipe->save($this->data)) {
				$this->Session->setFlash(__('The recipe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Recipe->User->find('list');
		$ingredients = $this->Recipe->Ingredient->find('list');
		$this->set(compact('users', 'ingredients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid recipe', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Recipe->save($this->data)) {
				$this->Session->setFlash(__('The recipe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Recipe->read(null, $id);
		}
		$users = $this->Recipe->User->find('list');
		$ingredients = $this->Recipe->Ingredient->find('list');
		$this->set(compact('users', 'ingredients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for recipe', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Recipe->delete($id)) {
			$this->Session->setFlash(__('Recipe deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Recipe was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>