<?php
App::uses('LogCategory', 'Model');

/**
 * LogCategory Test Case
 *
 */
class LogCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.log_category',
		'app.log'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LogCategory = ClassRegistry::init('LogCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LogCategory);

		parent::tearDown();
	}

}
