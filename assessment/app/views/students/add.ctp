<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
</head>
<body>
<?php
echo $this->Form->create('Student',array('action'=>'add'));
echo $this->Form->input('name');
echo $this->Form->end('save name');
?>
</body>
</html>