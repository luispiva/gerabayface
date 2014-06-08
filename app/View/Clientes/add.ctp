<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Administração Cadastro Cliente'); ?></legend>
	<?php
		
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
		echo $this->Form->input('fone');
                echo $this->Form->input('pabxconf_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar PABX'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo PABX'),array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
	</ul>
</div>
