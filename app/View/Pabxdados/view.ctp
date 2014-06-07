<div class="pabxdados view">
<h2><?php echo __('Pabxdado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pabxdado['Pabxdado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pabxdado['Clientes']['id'], array('controller' => 'clientes', 'action' => 'view', $pabxdado['Clientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pabxconfs'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pabxdado['Pabxconfs']['name'], array('controller' => 'pabxconfs', 'action' => 'view', $pabxdado['Pabxconfs']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Placas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pabxdado['Placas']['id'], array('controller' => 'placas', 'action' => 'view', $pabxdado['Placas']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serialplaca'); ?></dt>
		<dd>
			<?php echo h($pabxdado['Pabxdado']['serialplaca']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pabxdado'), array('action' => 'edit', $pabxdado['Pabxdado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pabxdado'), array('action' => 'delete', $pabxdado['Pabxdado']['id']), array(), __('Are you sure you want to delete # %s?', $pabxdado['Pabxdado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pabxdados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxdado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientes'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pabxconfs'), array('controller' => 'pabxconfs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Placas'), array('controller' => 'placas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Placas'), array('controller' => 'placas', 'action' => 'add')); ?> </li>
	</ul>
</div>
