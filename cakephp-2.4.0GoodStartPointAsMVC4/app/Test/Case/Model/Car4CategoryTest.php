<?php
App::uses('Car4Category', 'Model');

/**
 * Car4Category Test Case
 *
 */
class Car4CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car4_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Car4Category = ClassRegistry::init('Car4Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car4Category);

		parent::tearDown();
	}

}
