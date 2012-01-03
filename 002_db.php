<?php
class M4efc650b7e244b03b5c81c4d095f8041 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	var $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	var $migration = array(
		'up' => array(
            'create_table' => array(
                'students' => array(
                        'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                        'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
                        'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100,'unique'=>1),
                        'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40),
                        'indexes' => array(
                            'PRIMARY' => array('column' => 'id', 'unique' => 1),
                        ),
                        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                    ),
                'assessments'=>array(
                    'id'=>array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'topic'=>array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
                    'description'=>array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
                    'indexes'=>array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                   ),
                'assessments_students'=>array(
                    'id'=>array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'student_id'=>array('type' => 'integer', 'null' => false, 'default' => NULL),
                    'assessment_id'=>array('type' => 'integer', 'null' => false, 'default' => NULL),
                    'indexes'=>array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                   ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                 ),
                'questions'=>array(
                    'id'=>array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'assessment_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'question'=>array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
                    'indexes'=>array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                 ),
                'options'=>array(
                    'id'=>array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'question_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'option'=>array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
                    'indexes'=>array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                 ),
                'answers'=>array(
                    'id'=>array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'question_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'option_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL,'unique' => 1),
                    'indexes'=>array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                 ),
                'reports'=>array(
                    'id'=>array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'student_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'assessment_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'marks'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'percentage'=>array('type'=>'float', 'null' => false, 'default' => NULL),
                    'result'=>array('type'=>'integer', 'null' => false, 'default' => 0,'length'=>1),
                    'indexes'=>array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                 ),
                'results'=>array(
                    'id'=>array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'student_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'question_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'option_id'=>array('type'=>'integer', 'null' => false, 'default' => NULL),
                    'output'=>array('type'=>'integer', 'null' => false, 'default' => 0,'length'=>1),
                    'indexes'=>array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                 ),



            ),
		),
		'down' => array(
            'drop_table' => array(
                'students','reports','results','assessments_students'
            ),
		),
	);
//'assessments','assessments_students',,'questions','options','answers'
/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function after($direction) {
		return true;
	}
}
?>