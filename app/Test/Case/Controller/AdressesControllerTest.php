<?php
/* Adresses Test cases generated on: 2011-12-05 20:28:05 : 1323116885*/
App::uses('AdressesController', 'Controller');

/**
 * TestAdressesController *
 */
class TestAdressesController extends AdressesController {
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
 * AdressesController Test Case
 *
 */
class AdressesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.adresses', 'app.text', 'app.language_text', 'app.language', 'app.company_profile', 'app.user', 'app.user_profile', 'app.contact', 'app.company_category', 'app.category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Adresses = new TestAdressesController();
		$this->Adresses->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adresses);

		parent::tearDown();
	}

}
