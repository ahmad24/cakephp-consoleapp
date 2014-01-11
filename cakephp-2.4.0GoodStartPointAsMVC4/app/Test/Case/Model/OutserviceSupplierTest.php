<?php
App::uses('OutserviceSupplier', 'Model');

/**
 * OutserviceSupplier Test Case
 *
 */
class OutserviceSupplierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.outservice_supplier',
		'app.user',
		'app.out_service',
		'app.card',
		'app.car',
		'app.customer',
		'app.customer_categorie',
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
		'app.stop',
		'app.tool'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OutserviceSupplier = ClassRegistry::init('OutserviceSupplier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OutserviceSupplier);

		parent::tearDown();
	}

}
