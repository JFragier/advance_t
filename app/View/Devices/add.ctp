<div class="devices form">
<?php echo $this->Form->create('Device'); ?>
	<fieldset>
		<legend><?php echo __('Add Device'); ?></legend>
	<?php
		echo $this->Form->input('subprocess_id');
		echo $this->Form->input('name');
		echo $this->Form->input('ip');
		echo $this->Form->input('mac');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?></li>
	</ul>
</div>
