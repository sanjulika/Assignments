<?php
class Report extends AppModel{
    var $name='Report';

    var $belongsTo=array(
        'Student'=>array(
            'className' => 'Student',
            'foreignKey' => 'student_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
?>