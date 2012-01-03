<div class="options form">
<?php echo $this->Form->create('Option');?>
	<fieldset>
 		<legend><?php __('Edit Option'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('option');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Option.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Option.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Options', true), array('action' => 'index'));?></li>
	</ul>
</div>