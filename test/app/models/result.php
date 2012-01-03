<?php
    class Result extends AppModel{
        var $name='Result';
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
           );
    }
?>