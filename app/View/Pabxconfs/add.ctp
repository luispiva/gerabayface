<?php
/* CRUD : PABX Modelo
     * Tabela     : Pabxconf
     * Atributos  : id,nome,descrição.
     * Model      : Pabxconf.php
     * Controller : PabxconfsController.php
     * View       :  add.ctp
     */
?>
<body>
    <!-- Menu de Navegação -->
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Listar Clientes', array('controller' => 'clientes', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Listar PABX', array('controller' => 'pabxconf', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Gerar Arquivo', array('controller' => 'pabxdados', 'action' => 'index')); ?></li>       </ul>
    </div>
    <!-- Fim do Menu de Navegação -->
    <?php

    echo $this->Form->create('Pabxconf');
    echo $this->Form->input('nome');
    echo $this->Form->input('Descricao');

    echo $this->Form->input('Enviar', array('label' => FALSE, 'type' => 'submit'));
    echo $this->Form->end();
    ?>
</body>

