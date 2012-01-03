<?php
class Answer extends AppModel{
    var $name='answer';
    var $belongsTo = array(
        'Option'=>array(
            'className' => 'Option',
            'foreignKey' => 'option_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Question'=>array(
            'className' => 'Question',
            'foreignKey' => 'question_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
?>