<div class="placas index">
	<h2><?php echo __('Placas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('pabxconfs_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($placas as $placa): ?>
	<tr>
		<td><?php echo h($placa['Placa']['id']); ?>&nbsp;</td>
		<td><?php echo h($placa['Placa']['nome']); ?>&nbsp;</td>
		<td><?php echo h($placa['Placa']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($placa['Pabxconfs']['name'], array('controller' => 'pabxconfs', 'action' => 'view', $placa['Pabxconfs']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $placa['Placa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $placa['Placa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $placa['Placa']['id']), array(), __('Are you sure you want to delete # %s?', $placa['Placa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Placa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
	</ul>
</div>
