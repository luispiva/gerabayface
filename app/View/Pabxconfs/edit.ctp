<body> <div id="navegacao">
        <?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?>
        |
        <?php echo $this->Html->link('Listar Clientes', array('controller' => 'clientes', 'action' => 'index')); ?>
        |
        <?php echo $this->Html->link('Novo PABX', array('controller' => 'pabxconfs', 'action' => 'add')); ?>
        |
        <?php echo $this->Html->link('Gerar Arquivo', array('controller' => 'pabxdados', 'action' => 'index')); ?>


    </div>
    <?php
    echo $this->Form->create('Pabxconf');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('nome');
echo $this->Form->input('descricao');
    echo $this->Form->input('Alterar', array('type' => 'submit', 'label' => FALSE));
    echo $this->Form->end();
    ?>
</body>