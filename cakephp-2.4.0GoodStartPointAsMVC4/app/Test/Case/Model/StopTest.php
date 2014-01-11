<?php
App::uses('Stop', 'Model');

/**
 * Stop Test Case
 *
 */
class StopTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stop',
		'app.card',
		'app.car',
		'app.customer',
		'app.customer_categorie',
		'app.user',
		'app.car1_categorie',
		'app.car2_categorie',
		'app.car3_categorie',
		'app.car4_categorie',
		'app.car5_categorie',
		'app.owner',
		'app.employee',
		'app.employee_categorie',
		'app.maintenance',
		'app.maintenance_categorie',
		'app.test',
		'app.status',
		'app.cash_recipient',
		'app.check',
		'app.out_service',
		'app.outservice_supplier',
		'app.tool'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stop = ClassRegistry::init('Stop');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stop);

		parent::tearDown();
	}

}
