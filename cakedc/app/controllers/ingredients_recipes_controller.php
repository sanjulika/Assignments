<?php
class IngredientsRecipesController extends AppController {

	var $name = 'IngredientsRecipes';

	function index() {
		$this->IngredientsRecipe->recursive = 0;
		$this->set('ingredientsRecipes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ingredients recipe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ingredientsRecipe', $this->IngredientsRecipe->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IngredientsRecipe->create();
			if ($this->IngredientsRecipe->save($this->data)) {
				$this->Session->setFlash(__('The ingredients recipe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients recipe could not be saved. Please, try again.', true));
			}
		}
		$ingredients = $this->IngredientsRecipe->Ingredient->find('list');
		$recipes = $this->IngredientsRecipe->Recipe->find('list');
		$this->set(compact('ingredients', 'recipes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ingredients recipe', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IngredientsRecipe->save($this->data)) {
				$this->Session->setFlash(__('The ingredients recipe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients recipe could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IngredientsRecipe->read(null, $id);
		}
		$ingredients = $this->IngredientsRecipe->Ingredient->find('list');
		$recipes = $this->IngredientsRecipe->Recipe->find('list');
		$this->set(compact('ingredients', 'recipes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ingredients recipe', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IngredientsRecipe->delete($id)) {
			$this->Session->setFlash(__('Ingredients recipe deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ingredients recipe was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>