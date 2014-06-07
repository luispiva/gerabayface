<div class="pabxconfs view">
<h2><?php echo __('Pabxconf'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pabxconf['Pabxconf']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pabxconf['Pabxconf']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($pabxconf['Pabxconf']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pabxconf'), array('action' => 'edit', $pabxconf['Pabxconf']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pabxconf'), array('action' => 'delete', $pabxconf['Pabxconf']['id']), array(), __('Are you sure you want to delete # %s?', $pabxconf['Pabxconf']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconf'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($pabxconf['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pabxconf Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Fone'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pabxconf['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['pabxconf_id']; ?></td>
			<td><?php echo $cliente['nome']; ?></td>
			<td><?php echo $cliente['endereco']; ?></td>
			<td><?php echo $cliente['fone']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), array(), __('Are you sure you want to delete # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
