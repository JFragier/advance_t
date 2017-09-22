<div class="subprocesses view">
<h2><?php echo __('Subprocess'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subprocess['Subprocess']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process Id'); ?></dt>
		<dd>
			<?php echo h($subprocess['Subprocess']['process_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device Id'); ?></dt>
		<dd>
			<?php echo h($subprocess['Subprocess']['device_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subprocess['Subprocess']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subprocess['Subprocess']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subprocess['Subprocess']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subprocess'), array('action' => 'edit', $subprocess['Subprocess']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subprocess'), array('action' => 'delete', $subprocess['Subprocess']['id']), array(), __('Are you sure you want to delete # %s?', $subprocess['Subprocess']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subprocesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subprocess'), array('action' => 'add')); ?> </li>
	</ul>
</div>
