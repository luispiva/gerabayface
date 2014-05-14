<body>
     <div class="actions">
	<ul>
		<li><?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Listar Clientes', array('controller' => 'clientes', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Listar PABX', array('controller' => 'pabxconf', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Gerar Arquivo', array('controller' => 'pabxdados', 'action' => 'index')); ?></li>       </ul>
</div>
    <?php 
echo $this->Form->create('Cliente');
 echo $this->Form->input('nome'); 
 echo $this->Form->input('endereco'); 
 echo $this->Form->input('fone'); 
 echo $this->Form->input('pabxconf_id',array( 'options' => $funfa));

 echo $this->Form->input('Enviar', array('label' => FALSE, 'type' => 'submit')); 
 echo $this->Form->end(); 
?>
</body>

