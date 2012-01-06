<?php
class GravityProject extends AppModel{
	var $name = 'GravityProject';

	var $hasMany= array(
	        'Participant'=>array(
		        'className' => 'Participant',
		        'foreignKey' => 'gravity_project_id',
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
            'Story'=>array(
                    'className' => 'Story',
                    'foreignKey' => 'gravity_project_id',
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
            'Issue'=>array(
                    'className' => 'Issue',
                    'foreignKey' => 'gravity_project_id',
                    'dependent' => true,
                    'conditions' => '',
                    'fields' => '',
                    'order' => '',
                    'limit' => '',
                    'offset' => '',
                    'exclusive' => '',
                    'finderQuery' => '',
                    'counterQuery' => ''
            )
	    );

}