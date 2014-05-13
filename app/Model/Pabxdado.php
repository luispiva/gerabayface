<?

class  Pabxdado extends AppModel
{

 public $useTable = 'pabxdados';
 public $hasMany = 'Clientes';
 public $belongsTo = array (
 'Pabxconfs', 
'Clientes', 'Placas');
 


}

?>