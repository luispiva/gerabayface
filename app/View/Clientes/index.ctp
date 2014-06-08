<div class="clientes index">
	<h2><?php echo __('Administração de Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Endereço'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
				<td>
			<?php echo $this->Html->link($cliente['Pabxconf']['name'], array('controller' => 'pabxconfs', 'action' => 'view', $cliente['Pabxconf']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['fone']); ?>&nbsp;</td>
		<td class="actions">
                    <?php echo $this->Html->link(__('Imprimir'), array('action' => 'viewPdf', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Mostrar'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Deseja excluir # %s?', $cliente['Cliente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registro de um total de {:count} total, começando do registro {:start}, terminando em {:end}')
	));             
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
            
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Novo Perfil'), array('controller' => 'pabxdados', 'action' => 'add')); ?> </li>

	</ul>
</div>
