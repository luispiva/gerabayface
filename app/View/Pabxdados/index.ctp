<div class="pabxdados index">
	<h2><?php echo __('Pabxdados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('clientes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pabxconfs_id'); ?></th>
			<th><?php echo $this->Paginator->sort('placas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('serialplaca'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pabxdados as $pabxdado): ?>
	<tr>
		<td><?php echo h($pabxdado['Pabxdado']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pabxdado['Clientes']['nome'], array('controller' => 'clientes', 'action' => 'view', $pabxdado['Clientes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pabxdado['Pabxconfs']['name'], array('controller' => 'pabxconfs', 'action' => 'view', $pabxdado['Pabxconfs']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pabxdado['Placas']['nome'], array('controller' => 'placas', 'action' => 'view', $pabxdado['Placas']['id'])); ?>
		</td>
		<td><?php echo h($pabxdado['Pabxdado']['serialplaca']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pabxdado['Pabxdado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pabxdado['Pabxdado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pabxdado['Pabxdado']['id']), array(), __('Are you sure you want to delete # %s?', $pabxdado['Pabxdado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pabxdado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientes'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Placas'), array('controller' => 'placas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Placas'), array('controller' => 'placas', 'action' => 'add')); ?> </li>
	</ul>
</div>
