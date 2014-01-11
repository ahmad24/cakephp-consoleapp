<?php
App::uses('Car5Category', 'Model');

/**
 * Car5Category Test Case
 *
 */
class Car5CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car5_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Car5Category = ClassRegistry::init('Car5Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car5Category);

		parent::tearDown();
	}

}
