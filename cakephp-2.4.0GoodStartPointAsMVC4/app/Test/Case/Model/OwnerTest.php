<?php
App::uses('Owner', 'Model');

/**
 * Owner Test Case
 *
 */
class OwnerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.owner',
		'app.car',
		'app.customer',
		'app.customer_categorie',
		'app.user',
		'app.card',
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
		'app.stop',
		'app.tool',
		'app.car1_categorie',
		'app.car2_categorie',
		'app.car3_categorie',
		'app.car4_categorie',
		'app.car5_categorie'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Owner = ClassRegistry::init('Owner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Owner);

		parent::tearDown();
	}

}
