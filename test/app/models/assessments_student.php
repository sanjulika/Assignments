<?php
class AssessmentsStudent extends AppModel {
    var $name = 'AssessmentsStudent';

    var $belongsTo = array(
        'Assessment' =>array(
            'className' => 'Assessment',
            'foreignKey' => 'assessment_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Student'=>array(
            'className' => 'Student',
            'foreignKey' => 'student_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''

        )
    );
}
?>