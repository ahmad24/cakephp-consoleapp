<?php
App::uses('Car', 'Model');

/**
 * Car Test Case
 *
 */
class CarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car',
		'app.customer',
		'app.car1_categorie',
		'app.car2_categorie',
		'app.car3_categorie',
		'app.car4_categorie',
		'app.car5_categorie',
		'app.user',
		'app.owner',
		'app.card',
		'app.employee',
		'app.status',
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
		$this->Car = ClassRegistry::init('Car');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car);

		parent::tearDown();
	}

}
