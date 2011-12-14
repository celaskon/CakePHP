<?php
/* Categories Test cases generated on: 2011-11-28 23:36:06 : 1322523366*/
App::uses('Categories', 'Controller');

/**
 * TestCategories *
 */
class TestCategories extends Categories {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * Categories Test Case
 *
 */
class CategoriesTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.text', 'app.language_text', 'app.language');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Categories = new TestCategories();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categories);

		parent::tearDown();
	}

}
