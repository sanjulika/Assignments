<?php
class Report extends AppModel{
    var $name='Report';

    var $belongsTo=array(
        'User'=>array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
?>