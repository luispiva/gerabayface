<div class="placas view">
<h2><?php echo __('Placa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($placa['Placa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($placa['Placa']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($placa['Placa']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pabxconfs'); ?></dt>
		<dd>
			<?php echo $this->Html->link($placa['Pabxconfs']['name'], array('controller' => 'pabxconfs', 'action' => 'view', $placa['Pabxconfs']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Placa'), array('action' => 'edit', $placa['Placa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Placa'), array('action' => 'delete', $placa['Placa']['id']), array(), __('Are you sure you want to delete # %s?', $placa['Placa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Placas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Placa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
	</ul>
</div>
