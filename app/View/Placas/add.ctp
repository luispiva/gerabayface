<div class="placas form">
<?php echo $this->Form->create('Placa'); ?>
	<fieldset>
		<legend><?php echo __('Add Placa'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('pabxconfs_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Placas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
	</ul>
</div>
