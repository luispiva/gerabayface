<?

class Cliente extends AppModel{
 public $name = 'Cliente';
 public $useTable = 'clientes';
//public $belongsTo = array('Pabxconfs');
 public $hasMany = array('Pabxconfs');
 
}

?>