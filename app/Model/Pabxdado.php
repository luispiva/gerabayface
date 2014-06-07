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
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'testebayface';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'clientes_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pabxconfs_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'placas_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'serialplaca' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
			'foreignKey' => 'pabxconfs_id',
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
