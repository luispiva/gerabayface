<?php
/**
 * @WebAPP GeraBayface
 * @framework CakePHP
 * 
 * @autor Luis H. Piva Mendes
 */
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property Pabxconf $Pabxconf
 */
class Cliente extends AppModel {

/**
 * Configuração do Banco de dados
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'default';

/**
 * Campo da tabela que será mostrado 
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
		'pabxconf_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'endereco' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * Relacionamentos entre as tabelas
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pabxconf' => array(
			'className' => 'Pabxconf',
			'foreignKey' => 'pabxconf_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
