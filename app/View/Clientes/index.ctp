<div id="container">
    
<div class="actions">
    <ul>
       <li><?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>
       <li><?php echo $this->Html->link('Novo Cliente', array('controller' => 'clientes', 'action' => 'add')); ?></li>
       <li><?php echo $this->Html->link('Listar PABX', array('controller' => 'pabxconfs', 'action' => 'index')); ?></li>
       <li><?php echo $this->Html->link('Gerar Arquivo', array('controller' => 'pabxdados', 'action' => 'index')); ?></li>
     </ul>
        </div>  
<table cellpadding="0" cellspacing="0"> 
            <tr > 
                
                <th>Nome</th>
                <th>Endereço</th> 
                <th>Telefone</th> 
                <th> Modelo</th> 
                <th>Ações</th> 
            </tr> 
               
            <?php foreach ($clientes as $cliente) { ?> 
          <tr>
                    <td><?php echo $cliente['Cliente']['nome']; ?></td> 
                    <td><?php echo $cliente['Cliente']['endereco']; ?></td> 
                    <td><?php echo $cliente['Cliente']['fone']; ?></td> 
                    <td><?php echo $cliente['Cliente']['pabxconf_id']; ?></td> 
                    <td class="actions"><?php echo $this->Html->link('Editar', array('action' => 'edit', $cliente['Cliente']['id'])); ?> 
                        | <?php echo $this->Html->link('Excluir', array('action' => 'delete', $cliente['Cliente']['id']), array('confirm' => 'Você tem certeza que quer excluir este usuário?')); ?></td> <?php } ?> </tr> </table>
                        <div class="paging">
	
	</div>
</div>
