<?php
class Story extends AppModel{
	var $name = 'Story';

		var $hasMany= array(
		        'Task'=>array(
			        'className' => 'Task',
			        'foreignKey' => 'story_id',
			        'dependent' => true,
			        'conditions' => '',
			        'fields' => '',
			        'order' => '',
			        'limit' => '',
			        'offset' => '',
			        'exclusive' => '',
			        'finderQuery' => '',
			        'counterQuery' => ''
		        ),
			);

		var $belongsTo=array(
			'GravityProject' =>array(
			            'className' => 'GravityProject',
			            'foreignKey' => 'gravity_project_id',
			            'conditions' => '',
			            'fields' => '',
			            'order' => ''
			        ),
		);


}