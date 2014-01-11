<?php
App::uses('Car2Category', 'Model');

/**
 * Car2Category Test Case
 *
 */
class Car2CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car2_category',
		'app.car1_categorie',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Car2Category = ClassRegistry::init('Car2Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car2Category);

		parent::tearDown();
	}

}
