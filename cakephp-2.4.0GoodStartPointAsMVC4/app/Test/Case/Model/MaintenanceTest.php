<?php
App::uses('Maintenance', 'Model');

/**
 * Maintenance Test Case
 *
 */
class MaintenanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.maintenance',
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
		'app.test',
		'app.status',
		'app.cash_recipient',
		'app.check',
		'app.out_service',
		'app.stop',
		'app.tool',
		'app.maintenance_categorie'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Maintenance = ClassRegistry::init('Maintenance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Maintenance);

		parent::tearDown();
	}

}
