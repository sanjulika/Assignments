<?php
class User extends AppModel{
        var $name  = 'User';
        var $validate = array(
              'username' =>array( 'rule'=>'notEmpty' ),
              'password' =>array( 'rule'=>'notEmpty' )
          );
}

?>
