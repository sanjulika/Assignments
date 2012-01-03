<?php
class Assessment extends AppModel{
    var $name = 'Assessment';

    var $validate = array(
            'topic'=> array( 'rule'=>'notEmpty' )
        );

    var $hasAndBelongToMany = array(
            'User'=>array(
            'className'=>'User',
            'joinTable'=>'assessments_users',
            'foreignKey'=>'assessment_id',
            'associationForeignKey'=>'user_id',
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