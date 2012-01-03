<div class="ingredientsRecipes form">
<?php echo $this->Form->create('IngredientsRecipe');?>
	<fieldset>
 		<legend><?php __('Edit Ingredients Recipe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ingredient_id');
		echo $this->Form->input('recipe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('IngredientsRecipe.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('IngredientsRecipe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients Recipes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes', true), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe', true), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>