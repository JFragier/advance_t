<div class="processes view">
<h2><?php echo __('Process'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($process['Process']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyects Id'); ?></dt>
		<dd>
			<?php echo h($process['Process']['proyects_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($process['Process']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($process['Process']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($process['Process']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Process'), array('action' => 'edit', $process['Process']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Process'), array('action' => 'delete', $process['Process']['id']), array(), __('Are you sure you want to delete # %s?', $process['Process']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Processes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Process'), array('action' => 'add')); ?> </li>
	</ul>
</div>
