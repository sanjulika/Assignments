<?php
    class Result extends AppModel{
        var $name='Result';
        var $validate = array(
              'option_id'=> array( 'rule'=>'notEmpty' )
        );

        var $belongsTo=array(
               'Student'=>array(
               'className' => 'Student',
               'foreignKey' => 'Student_id',
               'conditions' => '',
               'fields' => '',
               'order' => ''
               ),
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
                   ),
               );
    }
?>