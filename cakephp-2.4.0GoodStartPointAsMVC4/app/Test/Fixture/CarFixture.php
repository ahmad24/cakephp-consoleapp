<?php
/**
 * CarFixture
 *
 */
class CarFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'chassis_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'motor_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'registration_number' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'car1_categorie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'car2_categorie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'car3_categorie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'car4_categorie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'car5_categorie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'registration_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'production_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'car_model' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'car_color' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'car_power' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'date_deleted' => array('type' => 'timestamp', 'null' => true, 'default' => 'CURRENT_TIMESTAMP'),
		'version' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'owner_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'car1_categorie_id' => array('column' => 'car1_categorie_id', 'unique' => 0),
			'car2_categorie_id' => array('column' => 'car2_categorie_id', 'unique' => 0),
			'car3_categorie_id' => array('column' => 'car3_categorie_id', 'unique' => 0),
			'car4_categorie_id' => array('column' => 'car4_categorie_id', 'unique' => 0),
			'car5_categorie_id' => array('column' => 'car5_categorie_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'chassis_number' => 'Lorem ipsum dolor sit amet',
			'motor_number' => 'Lorem ipsum dolor sit amet',
			'registration_number' => 'Lorem ipsum dolor sit amet',
			'customer_id' => 1,
			'car1_categorie_id' => 1,
			'car2_categorie_id' => 1,
			'car3_categorie_id' => 1,
			'car4_categorie_id' => 1,
			'car5_categorie_id' => 1,
			'registration_date' => '2013-11-08',
			'production_date' => '2013-11-08',
			'car_model' => 'Lorem ipsum dolor sit amet',
			'car_color' => 'Lorem ipsum dolor sit amet',
			'car_power' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'created' => '2013-11-08 07:38:03',
			'modified' => '2013-11-08 07:38:03',
			'deleted' => 1,
			'date_deleted' => 1383896283,
			'version' => 1,
			'owner_id' => 1
		),
	);

}
