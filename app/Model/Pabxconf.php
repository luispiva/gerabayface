<?php

class Pabxconf extends AppModel
{
public $name = 'Pabxconf';
 public $useTable = 'pabxconfs';
 //Clientes tem muitas PABX modelos
//public $hasmany = array('Clientes');
 public $belongsTo = 'Clientes';

}

?>