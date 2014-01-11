<?php
App::uses('TestCategory', 'Model');

/**
 * TestCategory Test Case
 *
 */
class TestCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.test_category',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TestCategory = ClassRegistry::init('TestCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TestCategory);

		parent::tearDown();
	}

}
