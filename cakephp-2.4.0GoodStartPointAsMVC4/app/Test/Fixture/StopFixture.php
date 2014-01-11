<?php
/**
 * StopFixture
 *
 */
class StopFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'stop_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'resume_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'resone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'observation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'resume_observation' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'status_id' => 1,
			'stop_time' => '2013-11-08 07:38:47',
			'resume_time' => '2013-11-08 07:38:47',
			'resone' => 'Lorem ipsum dolor sit amet',
			'observation' => 'Lorem ipsum dolor sit amet',
			'resume_observation' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-11-08 07:38:47'
		),
	);

}
