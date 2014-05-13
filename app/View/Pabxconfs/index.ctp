<div id="container">
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Listar Cliente', array('controller' => 'clientes', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Novo PABX', array('controller' => 'pabxconfs', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link('Gerar Arquivo', array('controller' => 'pabxdados', 'action' => 'index')); ?></li>
        </ul>
    </div>  
    <table cellpadding="0" cellspacing="0"> 
        <tr> 

            <th>Nome</th>
            <th>Descricao</th> 
            <th>Ações</th> 

        </tr> 
        <?php foreach ($pabxconfs as $pabxconf) { ?> 
            <tr>
                <td><?php echo $pabxconf['Pabxconf']['nome']; ?></td> 
                <td><?php echo $pabxconf['Pabxconf']['descricao']; ?></td> 

                <td class="actions"><?php echo $this->Html->link('Editar', array('action' => 'edit', $pabxconf['Pabxconf']['id'])); ?> 
                    | <?php echo $this->Html->link('Excluir', array('action' => 'delete', $pabxconf['Pabxconf']['id']), array('confirm' => 'Você tem certeza que quer excluir este usuário?')); ?></td> <?php } ?> </tr> </table>
    <div class="paging">

    </div>
</div>
