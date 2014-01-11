<?php
/**
 * TestFixture
 *
 */
class TestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'test_categorie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null),
		'estimated_time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'observation' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'date_deleted' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'version' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'card_id' => array('column' => 'card_id', 'unique' => 0),
			'test_categorie_id' => array('column' => 'test_categorie_id', 'unique' => 0),
			'employee_id' => array('column' => 'employee_id', 'unique' => 0)
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
			'test_categorie_id' => 1,
			'employee_id' => 1,
			'price' => 1,
			'estimated_time' => 1,
			'observation' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'user_id' => 1,
			'created' => '2013-11-08 07:38:55',
			'modified' => '2013-11-08 07:38:55',
			'deleted' => 1,
			'date_deleted' => 1383896335,
			'version' => 1
		),
	);

}
