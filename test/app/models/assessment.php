<?php
class Assessment extends AppModel{
    var $name = 'Assessment';

    var $validate = array(
            'topic'=> array( 'rule'=>'notEmpty' )
        );

    var $hasAndBelongToMany = array(
            'Student'=>array(
            'className'=>'Student',
            'joinTable'=>'assessments_students',
            'foreignKey'=>'assessment_id',
            'associationForeignKey'=>'student_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        )
    );

    var $hasMany= array(
        'Question'=>array(
        'className' => 'Question',
        'foreignKey' => 'assessment_id',
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
?>