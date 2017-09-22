<div class="subprocesses form">
<?php echo $this->Form->create('Subprocess'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subprocess'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('process_id');
		echo $this->Form->input('device_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subprocess.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Subprocess.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subprocesses'), array('action' => 'index')); ?></li>
	</ul>
</div>
