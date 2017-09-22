<div class="proyects form">
<?php echo $this->Form->create('Proyect'); ?>
	<fieldset>
		<legend><?php echo __('Add Proyect'); ?></legend>
	<?php
		echo $this->Form->input('companies_id');
		echo $this->Form->input('location');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proyects'), array('action' => 'index')); ?></li>
	</ul>
</div>
