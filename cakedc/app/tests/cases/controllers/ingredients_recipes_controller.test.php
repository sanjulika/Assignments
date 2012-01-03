<?php
/* IngredientsRecipes Test cases generated on: 2011-12-29 17:12:10 : 1325158330*/
App::import('Controller', 'IngredientsRecipes');

class TestIngredientsRecipesController extends IngredientsRecipesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IngredientsRecipesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ingredients_recipe', 'app.ingredient', 'app.recipe', 'app.user');

	function startTest() {
		$this->IngredientsRecipes =& new TestIngredientsRecipesController();
		$this->IngredientsRecipes->constructClasses();
	}

	function endTest() {
		unset($this->IngredientsRecipes);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>