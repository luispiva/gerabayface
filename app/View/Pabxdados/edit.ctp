<div class="pabxdados form">
<?php echo $this->Form->create('Pabxdado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pabxdado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clientes_id');
		echo $this->Form->input('pabxconfs_id');
		echo $this->Form->input('placas_id');
		echo $this->Form->input('serialplaca');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pabxdado.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pabxdado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pabxdados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientes'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Placas'), array('controller' => 'placas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Placas'), array('controller' => 'placas', 'action' => 'add')); ?> </li>
	</ul>
</div>
