<?php
/**
 * CardFixture
 *
 */
class CardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'car_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'application_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'driver_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'counter' => array('type' => 'integer', 'null' => false, 'default' => null),
		'reciption_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'end_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'delivery_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'observations_customer' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'observations_reciver' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'date_deleted' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'version' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'car_id' => array('column' => 'car_id', 'unique' => 0),
			'employee_id' => array('column' => 'employee_id', 'unique' => 0),
			'customer_id' => array('column' => 'customer_id', 'unique' => 0),
			'status_id' => array('column' => 'status_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'car_id' => 1,
			'application_number' => 'Lorem ipsum dolor sit amet',
			'employee_id' => 1,
			'customer_id' => 1,
			'driver_name' => 'Lorem ipsum dolor sit amet',
			'counter' => 1,
			'reciption_time' => '2013-11-08 07:38:00',
			'end_time' => '2013-11-08 07:38:00',
			'delivery_time' => '2013-11-08 07:38:00',
			'status_id' => 1,
			'user_id' => 1,
			'observations_customer' => 'Lorem ipsum dolor sit amet',
			'observations_reciver' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-11-08 07:38:00',
			'modified' => '2013-11-08 07:38:00',
			'deleted' => 1,
			'date_deleted' => 1383896280,
			'version' => 1
		),
	);

}
