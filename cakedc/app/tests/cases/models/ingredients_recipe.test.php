<?php
/* IngredientsRecipe Test cases generated on: 2011-12-29 17:12:09 : 1325158329*/
App::import('Model', 'IngredientsRecipe');

class IngredientsRecipeTestCase extends CakeTestCase {
	var $fixtures = array('app.ingredients_recipe', 'app.ingredient', 'app.recipe', 'app.user');

	function startTest() {
		$this->IngredientsRecipe =& ClassRegistry::init('IngredientsRecipe');
	}

	function endTest() {
		unset($this->IngredientsRecipe);
		ClassRegistry::flush();
	}

}
?>