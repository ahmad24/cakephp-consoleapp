<?php
/**
 * EmployeeFixture
 *
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'employee_categorie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telephone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cellphone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'birthdate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'employment' => array('type' => 'date', 'null' => false, 'default' => null),
		'identity' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'date_deleted' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'version' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'employee_categorie_id' => array('column' => 'employee_categorie_id', 'unique' => 0),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'employee_categorie_id' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'telephone' => 'Lorem ipsum dolor ',
			'cellphone' => 'Lorem ipsum dolor ',
			'birthdate' => '2013-11-08 07:38:16',
			'employment' => '2013-11-08',
			'identity' => 'Lorem ipsum dolor ',
			'user_id' => 1,
			'created' => '2013-11-08 07:38:16',
			'modified' => '2013-11-08 07:38:16',
			'deleted' => 1,
			'date_deleted' => 1383896296,
			'version' => 1
		),
	);

}
