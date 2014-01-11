<?php
App::uses('Car1Category', 'Model');

/**
 * Car1Category Test Case
 *
 */
class Car1CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car1_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Car1Category = ClassRegistry::init('Car1Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car1Category);

		parent::tearDown();
	}

}
