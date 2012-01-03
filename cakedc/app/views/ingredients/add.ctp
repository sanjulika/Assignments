<div class="ingredients form">
<?php echo $this->Form->create('Ingredient');?>
	<fieldset>
 		<legend><?php __('Add Ingredient'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Recipe');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ingredients', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Recipes', true), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe', true), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>