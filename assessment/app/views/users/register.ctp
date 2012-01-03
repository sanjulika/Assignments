<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
</head>
<body>
<h1>Register user</h1>
<?php
echo $this->Form->create('User',array('action'=>'register'));
echo $this->Form->input('name');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('retype_password',array('type'=>'password'));
echo $this->Form->end('Register');
?>
</body>
</html>