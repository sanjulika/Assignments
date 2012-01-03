<?php
class Question extends AppModel{
    var $name='Question';

    var $validate = array(
              'question'=> array( 'rule'=>'notEmpty' )
            );
    var $hasMany= array(
        'Option'=>array(
        'className' => 'Option',
        'foreignKey' => 'question_id',
        'dependent' => true,
        'conditions' => '',
        'fields' => '',
        'order' => '',
        'limit' => '5',
        'offset' => '',
        'exclusive' => '',
        'finderQuery' => '',
        'counterQuery' => ''
      ),
        'Result'=>array(
                'className' => 'Result',
                'foreignKey' => 'question_id',
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

    var $belongsTo=array(
        'Assessment'=>array(
        'className' => 'Assessment',
        'foreignKey' => 'assessment_id',
        'conditions' => '',
        'fields' => '',
        'order' => ''
        )
    );
    var $hasOne =array(
        'Answer'=>array(
        'className' => 'Answer',
        'foreignKey' => 'question_id',
        'conditions' => '',
        'fields' => '',
        'order' => ''
        )
     );

}