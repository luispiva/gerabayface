<div class="clientes view">
<h2><?php echo __('Dados Cliente'); ?></h2>
	<dl>
		
		
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fone']); ?>
			&nbsp;
		</dd>
                <h2><?php echo __('Equipamento Cliente'); ?></h2>
                <dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Pabxconf']['name'], array('controller' => 'pabxconfs', 'action' => 'view', $cliente['Pabxconf']['id'])); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Descrição PABX'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Pabxconf']['descricao'], array('controller' => 'pabxconfs', 'action' => 'view', $cliente['Pabxconf']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Mostrar Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Mostrar Modelo PABX'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Modelo PABX'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
	</ul>
</div>
