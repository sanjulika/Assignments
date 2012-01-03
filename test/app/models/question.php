<?php
class Question extends AppModel{
    var $name='Question';

    var $hasMany= array(
        'Option'=>array(
        'className' => 'Option',
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