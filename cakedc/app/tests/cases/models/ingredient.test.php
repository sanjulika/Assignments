<?php
/* Ingredient Test cases generated on: 2011-12-29 17:12:15 : 1325158335*/
App::import('Model', 'Ingredient');

class IngredientTestCase extends CakeTestCase {
	var $fixtures = array('app.ingredient', 'app.recipe', 'app.user', 'app.ingredients_recipe');

	function startTest() {
		$this->Ingredient =& ClassRegistry::init('Ingredient');
	}

	function endTest() {
		unset($this->Ingredient);
		ClassRegistry::flush();
	}

}
?>