<?php
/* IngredientsRecipe Fixture generated on: 2011-12-29 17:12:09 : 1325158329 */
class IngredientsRecipeFixture extends CakeTestFixture {
	var $name = 'IngredientsRecipe';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ingredient_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'recipe_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'ingredient_id' => 1,
			'recipe_id' => 1
		),
	);
}
?>