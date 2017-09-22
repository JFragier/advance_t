<div class="data form">
<?php echo $this->Form->create('Data'); ?>
	<fieldset>
		<legend><?php echo __('Add Data'); ?></legend>
	<?php
		echo $this->Form->input('device_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
