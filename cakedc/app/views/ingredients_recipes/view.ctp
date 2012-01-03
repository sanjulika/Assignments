<div class="ingredientsRecipes view">
<h2><?php  __('Ingredients Recipe');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingredientsRecipe['IngredientsRecipe']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ingredient'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ingredientsRecipe['Ingredient']['name'], array('controller' => 'ingredients', 'action' => 'view', $ingredientsRecipe['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($ingredientsRecipe['Recipe']['name'], array('controller' => 'recipes', 'action' => 'view', $ingredientsRecipe['Recipe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingredients Recipe', true), array('action' => 'edit', $ingredientsRecipe['IngredientsRecipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ingredients Recipe', true), array('action' => 'delete', $ingredientsRecipe['IngredientsRecipe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredientsRecipe['IngredientsRecipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients Recipes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredients Recipe', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients', true), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient', true), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes', true), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe', true), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
