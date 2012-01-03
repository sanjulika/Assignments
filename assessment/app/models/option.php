<?php
class Option extends AppModel{
    var $name='Option';
    var $validate = array(
                'option'=> array( 'rule'=>'notEmpty' )
            );

    var $hasOne =array(
           'Answer'=>array(
                'className' => 'Answer',
                'foreignKey' => 'option_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => ''
           )
       );
    var $hasMany =array(
               'Result'=>array(
                'className' => 'Result',
                'foreignKey' => 'option_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => ''
               )
           );

    var $belongsTo = array(
            'Question' =>array(
                'className' => 'Question',
                'foreignKey' => 'question_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            ),
        );
}
?>