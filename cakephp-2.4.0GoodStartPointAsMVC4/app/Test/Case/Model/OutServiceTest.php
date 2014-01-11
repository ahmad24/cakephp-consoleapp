<?php
App::uses('OutService', 'Model');

/**
 * OutService Test Case
 *
 */
class OutServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.out_service',
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
		'app.stop',
		'app.tool',
		'app.outservice_supplier'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OutService = ClassRegistry::init('OutService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OutService);

		parent::tearDown();
	}

}
