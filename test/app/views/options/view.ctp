<div class="options view">
<h2><?php  __('Option');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['question_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Option'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $option['Option']['option']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Option', true), array('action' => 'edit', $option['Option']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Option', true), array('action' => 'delete', $option['Option']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $option['Option']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Options', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Option', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
