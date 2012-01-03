<?php
/* Ingredients Test cases generated on: 2011-12-29 17:12:17 : 1325158337*/
App::import('Controller', 'Ingredients');

class TestIngredientsController extends IngredientsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IngredientsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ingredient', 'app.recipe', 'app.user', 'app.ingredients_recipe');

	function startTest() {
		$this->Ingredients =& new TestIngredientsController();
		$this->Ingredients->constructClasses();
	}

	function endTest() {
		unset($this->Ingredients);
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