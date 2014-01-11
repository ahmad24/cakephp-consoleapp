<?php
App::uses('Car3Category', 'Model');

/**
 * Car3Category Test Case
 *
 */
class Car3CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car3_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Car3Category = ClassRegistry::init('Car3Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car3Category);

		parent::tearDown();
	}

}
