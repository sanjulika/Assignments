<?php
/* Recipe Test cases generated on: 2011-12-29 17:12:40 : 1325158300*/
App::import('Model', 'Recipe');

class RecipeTestCase extends CakeTestCase {
	var $fixtures = array('app.recipe', 'app.user', 'app.ingredient', 'app.ingredients_recipe');

	function startTest() {
		$this->Recipe =& ClassRegistry::init('Recipe');
	}

	function endTest() {
		unset($this->Recipe);
		ClassRegistry::flush();
	}

}
?>