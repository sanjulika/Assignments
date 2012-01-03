<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Student page</title>
</head>
<body>
<?php
//pr($students);

echo "<br/>student name= ".$students[0]['Student']['name'];
echo "<br/>marks = ".$students[0]['Report']['marks'];
echo '<br/>';
echo $this->Html->link('Add','add');
echo '<br/>';
echo $this->Html->link('Assessment',array('controller'=>'assessments','action'=>'index'));
?>
</body>
</html>