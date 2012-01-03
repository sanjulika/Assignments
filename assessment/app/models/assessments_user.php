<?php
class AssessmentsUser extends AppModel {
    var $name = 'AssessmentsUser';

    var $belongsTo = array(
        'Assessment' =>array(
            'className' => 'Assessment',
            'foreignKey' => 'assessment_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'User'=>array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''

        )
    );
}
?>