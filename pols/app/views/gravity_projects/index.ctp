<?php

	//print_r($id);
echo $this->Form->create('',array('controller'=>'gravity_projects','action'=>'fetchData'));
//echo $this->Form->input('url');
//echo $this->Form->input('key');
echo $this->Form->end('Fetch data');
	echo $this->Html->link('Save data',array('controller'=>'gravity_projects','action'=>'saveData'));
?>