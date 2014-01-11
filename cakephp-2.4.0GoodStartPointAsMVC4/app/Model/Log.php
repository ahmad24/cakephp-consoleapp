<?php
App::uses('AppModel', 'Model');
/**
 * Log Model
 *
 * @property LogCategory $LogCategory
 */
class Log extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'log_category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'message1' => array(
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
		'LogCategory' => array(
			'className' => 'LogCategory',
			'foreignKey' => 'log_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
