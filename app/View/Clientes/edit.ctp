<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Administração Editar Cliente'); ?></legend>
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
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Cliente.id')), array(), __('Deseja excluir o clientee # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Mostrar Clientes'), array('action' => 'index')); ?></li>
		
		
	</ul>
</div>
