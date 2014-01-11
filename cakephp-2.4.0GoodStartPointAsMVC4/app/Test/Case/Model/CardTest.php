<?php
App::uses('Card', 'Model');

/**
 * Card Test Case
 *
 */
class CardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.card',
		'app.car',
		'app.employee',
		'app.customer',
		'app.status',
		'app.user',
		'app.cash_recipient',
		'app.maintenance',
		'app.out_service',
		'app.stop',
		'app.test',
		'app.tool'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Card = ClassRegistry::init('Card');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Card);

		parent::tearDown();
	}

}
