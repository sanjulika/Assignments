<?php
	class Issue extends AppModel{
		var $name = 'Issue';

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