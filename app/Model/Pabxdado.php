<?php
/**
 * @WebAPP GeraBayface
 * @framework CakePHP
 * 
 * @autor Luis H. Piva Mendes
 */
App::uses('AppModel', 'Model');
/**
 * Pabxdado Model
 *
 * @property Clientes $Clientes 
 * @property Pabxconfs $Pabxconfs
 * @property Placas $Placas
 */
class Pabxdado extends AppModel {
    
/**
 * Configuração com banco de dados
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'default';

/**
 * Campo mostrado no relacionamento
 * Display field
 *
 * @var string
 */
	public $displayField = array('clientes_id','pabxconfs_id','placas_id');


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * Relacionamentos das tabelas
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Clientes' => array(
			'className' => 'Clientes',
			'foreignKey' => 'clientes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pabxconfs' => array(
			'className' => 'Pabxconfs',
			'foreignKey' => 'placas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Placas' => array(
			'className' => 'Placas',
			'foreignKey' => 'placas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
