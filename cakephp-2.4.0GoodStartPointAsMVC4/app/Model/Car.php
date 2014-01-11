<?php
App::uses('AppModel', 'Model');
/**
 * Car Model
 *
 * @property Customer $Customer
 * @property Car1Categorie $Car1Categorie
 * @property Car2Categorie $Car2Categorie
 * @property Car3Categorie $Car3Categorie
 * @property Car4Categorie $Car4Categorie
 * @property Car5Categorie $Car5Categorie
 * @property User $User
 * @property Owner $Owner
 * @property Card $Card
 */
class Car extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Car1Categorie' => array(
			'className' => 'Car1Categorie',
			'foreignKey' => 'car1_categorie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Car2Categorie' => array(
			'className' => 'Car2Categorie',
			'foreignKey' => 'car2_categorie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Car3Categorie' => array(
			'className' => 'Car3Categorie',
			'foreignKey' => 'car3_categorie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Car4Categorie' => array(
			'className' => 'Car4Categorie',
			'foreignKey' => 'car4_categorie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Car5Categorie' => array(
			'className' => 'Car5Categorie',
			'foreignKey' => 'car5_categorie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Owner' => array(
			'className' => 'Owner',
			'foreignKey' => 'owner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Card' => array(
			'className' => 'Card',
			'foreignKey' => 'car_id',
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
