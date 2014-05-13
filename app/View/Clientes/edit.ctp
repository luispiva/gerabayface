<body> <div id="navegacao">
        <?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?>
        |
        <?php echo $this->Html->link('Listar Clientes', array('controller' => 'clientes', 'action' => 'index')); ?>
        |
        <?php echo $this->Html->link('Listar PABX', array('controller' => 'pabxconfs', 'action' => 'index')); ?>
        |
        <?php echo $this->Html->link('Gerar Arquivo', array('controller' => 'pabxdados', 'action' => 'index')); ?>


    </div>
    <?php
    echo $this->Form->create('Cliente');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('nome');
    echo $this->Form->input('endereco');
    echo $this->Form->input('fone');
    echo $this->Form->input('pabxconfs_id');
    echo $this->Form->input('Alterar', array('type' => 'submit', 'label' => FALSE));
    echo $this->Form->end();
    ?>
</body>