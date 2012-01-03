<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>User page</title>
</head>
<body>
<?php
echo $this->Session->flash('auth');
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('id',array('type'=>'hidden'));
echo $this->Form->end('Login');

echo '<br/>';
echo $this->Html->link('Register',array('admin'=>false,'controller'=>'users','action'=>'register'));
?>
</body>
</html>