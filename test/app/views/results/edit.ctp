<div class="results form">
<?php echo $this->Form->create('Result');?>
	<fieldset>
 		<legend><?php __('Edit Result'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('option_id');
		echo $this->Form->input('output');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Result.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Result.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Results', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Options', true), array('controller' => 'options', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Option', true), array('controller' => 'options', 'action' => 'add')); ?> </li>
	</ul>
</div>