<div class="proyects view">
<h2><?php echo __('Proyect'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyect['Proyect']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Companies Id'); ?></dt>
		<dd>
			<?php echo h($proyect['Proyect']['companies_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($proyect['Proyect']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($proyect['Proyect']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proyect['Proyect']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proyect['Proyect']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proyect'), array('action' => 'edit', $proyect['Proyect']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proyect'), array('action' => 'delete', $proyect['Proyect']['id']), array(), __('Are you sure you want to delete # %s?', $proyect['Proyect']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyect'), array('action' => 'add')); ?> </li>
	</ul>
</div>
