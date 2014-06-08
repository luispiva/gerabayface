<?php
/**
 * @WebAPP GeraBayface
 * @framework CakePHP
 * 
 * @autor Luis H. Piva Mendes
 */
App::uses('AppModel', 'Model');
/**
 * Placa Model
 *
 * @property Pabxconfs $Pabxconfs
 */
class Placa extends AppModel {
    
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
	public $displayField = 'nome';

/**
 * Validação dos campos do Formulário
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pabxconfs_id' => array(
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
 * Relacionamento das tabelas
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pabxconfs' => array(
			'className' => 'Pabxconfs',
			'foreignKey' => 'pabxconfs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
