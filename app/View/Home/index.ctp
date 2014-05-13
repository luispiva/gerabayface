<body>
    <div id="container">
        <div class="actions">
	<ul>
		<li><?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Listar Clientes', array('controller' => 'clientes', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Listar PABX', array('controller' => 'pabxconfs', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Gerar Arquivo', array('controller' => 'pabxdados', 'action' => 'index')); ?></li>       
        </ul>
</div>  
        </div>
</body>