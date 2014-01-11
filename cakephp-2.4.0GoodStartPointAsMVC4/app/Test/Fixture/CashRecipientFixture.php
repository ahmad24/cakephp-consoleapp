<?php
/**
 * CashRecipientFixture
 *
 */
class CashRecipientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'total_price' => array('type' => 'float', 'null' => false, 'default' => null),
		'check_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'receivable' => array('type' => 'float', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'date_deleted' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'version' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'test_price' => array('type' => 'float', 'null' => true, 'default' => null),
		'end_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'maint_price' => array('type' => 'float', 'null' => true, 'default' => null),
		'tool_price' => array('type' => 'float', 'null' => true, 'default' => null),
		'out_service_price' => array('type' => 'float', 'null' => true, 'default' => null),
		'discount_rate' => array('type' => 'float', 'null' => true, 'default' => null),
		'discount_amount' => array('type' => 'float', 'null' => true, 'default' => null),
		'in_cash' => array('type' => 'float', 'null' => true, 'default' => null),
		'check' => array('type' => 'float', 'null' => true, 'default' => null),
		'observation' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'check_id' => array('column' => 'check_id', 'unique' => 0)
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
			'card_id' => 1,
			'total_price' => 1,
			'check_id' => 1,
			'receivable' => 1,
			'user_id' => 1,
			'created' => '2013-11-08 07:38:06',
			'modified' => '2013-11-08 07:38:06',
			'deleted' => 1,
			'date_deleted' => 1383896286,
			'version' => 1,
			'test_price' => 1,
			'end_time' => '2013-11-08 07:38:06',
			'maint_price' => 1,
			'tool_price' => 1,
			'out_service_price' => 1,
			'discount_rate' => 1,
			'discount_amount' => 1,
			'in_cash' => 1,
			'check' => 1,
			'observation' => 'Lorem ipsum dolor sit amet'
		),
	);

}
