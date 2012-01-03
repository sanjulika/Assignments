<html>
<body>
<?php
echo $this->Form->create('Assessment',array('controller'=>'assessments','action'=>'add'));
echo $this->Form->input('topic');
echo $this->Form->input('description');
echo $this->Form->end('Save Assessment');
?>
</body>
</html>