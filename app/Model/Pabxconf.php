<?php
/**
 * @WebAPP GeraBayface
 * @framework CakePHP
 * 
 * @autor Luis H. Piva Mendes
 */
App::uses('AppModel', 'Model');
/**
 * Pabxconf Model
 *
 * @property Cliente $Cliente
 */
class Pabxconf extends AppModel {

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
	public $displayField = 'name';

/**
 * Validação dos campos dos formulários
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descricao' => array(
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
 * Relacionamento das tabelas
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'pabxconf_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
