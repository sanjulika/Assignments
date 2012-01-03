<div class="assessments form">
<?php echo $this->Form->create('Assessment');?>
	<fieldset>
 		<legend><?php __('Edit Assessment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('topic');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Assessment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Assessment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assessments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>