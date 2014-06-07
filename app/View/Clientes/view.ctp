<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pabxconf'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Pabxconf']['name'], array('controller' => 'pabxconfs', 'action' => 'view', $cliente['Pabxconf']['id'])); ?>
			&nbsp;
		</dd>
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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconf'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
	</ul>
</div>
