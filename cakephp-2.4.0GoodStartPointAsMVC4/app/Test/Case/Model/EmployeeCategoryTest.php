<?php
App::uses('EmployeeCategory', 'Model');

/**
 * EmployeeCategory Test Case
 *
 */
class EmployeeCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employee_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployeeCategory = ClassRegistry::init('EmployeeCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployeeCategory);

		parent::tearDown();
	}

}
