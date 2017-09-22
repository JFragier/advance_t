<div class="processes form">
<?php echo $this->Form->create('Process'); ?>
	<fieldset>
		<legend><?php echo __('Add Process'); ?></legend>
	<?php
		echo $this->Form->input('proyects_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Processes'), array('action' => 'index')); ?></li>
	</ul>
</div>
