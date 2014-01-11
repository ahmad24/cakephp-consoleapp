<?php
App::uses('MaintenanceCategory', 'Model');

/**
 * MaintenanceCategory Test Case
 *
 */
class MaintenanceCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.maintenance_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MaintenanceCategory = ClassRegistry::init('MaintenanceCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaintenanceCategory);

		parent::tearDown();
	}

}
