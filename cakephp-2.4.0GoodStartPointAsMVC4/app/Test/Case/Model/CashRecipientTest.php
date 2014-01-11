<?php
App::uses('CashRecipient', 'Model');

/**
 * CashRecipient Test Case
 *
 */
class CashRecipientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cash_recipient',
		'app.card',
		'app.car',
		'app.customer',
		'app.car1_categorie',
		'app.car2_categorie',
		'app.car3_categorie',
		'app.car4_categorie',
		'app.car5_categorie',
		'app.user',
		'app.owner',
		'app.employee',
		'app.status',
		'app.maintenance',
		'app.out_service',
		'app.stop',
		'app.test',
		'app.tool',
		'app.check'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CashRecipient = ClassRegistry::init('CashRecipient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CashRecipient);

		parent::tearDown();
	}

}
