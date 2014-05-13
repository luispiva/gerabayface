<?

class Cliente extends AppModel{
 public $name = 'Cliente';
 public $useTable = 'clientes';
 public $belongsTo = array('Pabxconf' => array (
                        'className' => 'Pabxconf',
                        'foreignKey' => 'pabxconf_id',
                       // 'type' => 'RIGTH',
                        'fields' => 'Pabxconf.id', 'Pabxconf.nome'));

 /* public $belongsTo =array('Pabxconf' => array(
            'className' => 'Pabxconfs',
            'foreignKey' => 'pabxconf_id',
            'conditions' => array()));*/
 
}

?>