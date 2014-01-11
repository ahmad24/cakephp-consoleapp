<?php
App::uses('Check', 'Model');

/**
 * Check Test Case
 *
 */
class CheckTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.check',
		'app.user',
		'app.cash_recipient',
		'app.card',
		'app.car',
		'app.customer',
		'app.car1_categorie',
		'app.car2_categorie',
		'app.car3_categorie',
		'app.car4_categorie',
		'app.car5_categorie',
		'app.owner',
		'app.employee',
		'app.status',
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
		$this->Check = ClassRegistry::init('Check');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Check);

		parent::tearDown();
	}

}
