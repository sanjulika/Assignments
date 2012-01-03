<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
</head>
<body>
<?php
//pr($assessments);
echo $this->Form->create('Question',array('controller'=>'questions','action'=>'add'));
echo $this->Form->input('assessment_id',array('type'=>'select','values'=>$assessments));
echo $this->Form->input('question');
echo $this->Form->input('id',array('type'=>'hidden'));
echo $this->Form->input('Option.0.option');
echo $this->Form->input('Option.1.option');
echo $this->Form->input('Option.2.option');
echo $this->Form->input('Option.3.option');
echo $this->Form->input('answer',array('type'=>'select','options'=>array('1','2','3','4')));
echo $this->Form->end('Save Assessment');
?>
</body>
</html>