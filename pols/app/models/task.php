<?php
	class Task extends AppModel{
		var $name = 'Task';
		var $belongsTo=array(
			'Story' =>array(
			            'className' => 'Story',
			            'foreignKey' => 'story_id',
			            'conditions' => '',
			            'fields' => '',
			            'order' => ''
			        ),
		);
	}