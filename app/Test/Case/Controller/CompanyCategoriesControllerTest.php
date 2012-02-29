<?php
/* CompanyCategories Test cases generated on: 2011-12-14 21:36:35 : 1323898595*/
App::uses('CompanyCategoriesController', 'Controller');

/**
 * TestCompanyCategoriesController *
 */
class TestCompanyCategoriesController extends CompanyCategoriesController {
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
 * CompanyCategoriesController Test Case
 *
 */
class CompanyCategoriesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.company_category', 'app.category', 'app.text', 'app.language_text', 'app.language', 'app.company_profile', 'app.user', 'app.group', 'app.user_profile', 'app.contact', 'app.adress');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CompanyCategories = new TestCompanyCategoriesController();
		$this->CompanyCategories->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyCategories);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
