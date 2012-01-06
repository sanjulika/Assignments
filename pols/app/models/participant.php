<?php
class Participant extends AppModel{
	var $name = 'Participant';
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