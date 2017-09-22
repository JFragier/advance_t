<div class="proyects form">
<?php echo $this->Form->create('Proyect'); ?>
	<fieldset>
		<legend><?php echo __('Edit Proyect'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proyect.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proyect.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proyects'), array('action' => 'index')); ?></li>
	</ul>
</div>
