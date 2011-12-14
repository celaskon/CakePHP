<?php
/* CompanyProfiles Test cases generated on: 2011-12-14 14:31:21 : 1323873081*/
App::uses('CompanyProfilesController', 'Controller');

/**
 * TestCompanyProfilesController *
 */
class TestCompanyProfilesController extends CompanyProfilesController {
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
 * CompanyProfilesController Test Case
 *
 */
class CompanyProfilesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.company_profile', 'app.text', 'app.language_text', 'app.language', 'app.user', 'app.group', 'app.user_profile', 'app.contact', 'app.company_category', 'app.category', 'app.adress');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CompanyProfiles = new TestCompanyProfilesController();
		$this->CompanyProfiles->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyProfiles);

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
