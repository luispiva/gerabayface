<div class="pabxconfs form">
<?php echo $this->Form->create('Pabxconf'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pabxconf'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pabxconf.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pabxconf.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
