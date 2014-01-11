<?php
App::uses('Test', 'Model');

/**
 * Test Test Case
 *
 */
class TestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.test',
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
		'app.status',
		'app.stop',
		'app.cash_recipient',
		'app.check',
		'app.out_service',
		'app.outservice_supplier',
		'app.tool',
		'app.test_categorie'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Test = ClassRegistry::init('Test');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Test);

		parent::tearDown();
	}

}
