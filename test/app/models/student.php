<?php
class Student extends AppModel{
    var $name='Student';
    var $validate = array(
        'name'=> array( 'rule'=>'notEmpty' )
    );

   var $hasOne =array(
       'Report'=>array(
            'className' => 'Report',
            'foreignKey' => 'student_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => ''
       ),
        'Result'=>array(
            'className' => 'Result',
            'foreignKey' => 'student_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => ''
       )
   );
    var $hasAndBelongToMany = array(
            'Assessment'=>array(
                'className'=>'Assessment',
                'joinTable'=>'assessments_students',
                'foreignKey'=>'student_id',
                'associationForeignKey'=>'assessment_id',
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
}
?>