<?php
class User extends AppModel{
    var $name='User';
    var $validate = array(
        'name'=> array( 'rule'=>'notEmpty' ),
        'username'=> array( 'rule'=>'notEmpty' ),
        'password'=> array( 'rule'=>'notEmpty' )
    );

   var $hasOne =array(
       'Report'=>array(
            'className' => 'Report',
            'foreignKey' => 'user_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => ''
       ),
       );
    var $hasMany=array(
        'Result'=>array(
            'className' => 'Result',
            'foreignKey' => 'user_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => ''
       )
   );
    var $hasAndBelongToMany = array(
            'Assessment'=>array(
                'className'=>'Assessment',
                'joinTable'=>'assessments_users',
                'foreignKey'=>'user_id',
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