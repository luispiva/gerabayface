<?php
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
 * Display field
 *
 * @var string
 */
	public $displayField = 'clientes_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
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
