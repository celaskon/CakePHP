<?php
/* Contacts Test cases generated on: 2011-11-28 22:46:14 : 1322520374*/
App::uses('ContactsController', 'Controller');

/**
 * TestContactsController *
 */
class TestContactsController extends ContactsController {
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
 * ContactsController Test Case
 *
 */
class ContactsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contact', 'app.company_profile', 'app.text', 'app.language_text', 'app.language', 'app.user', 'app.user_profile');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Contacts = new TestContactsController();
		$this->Contacts->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contacts);

		parent::tearDown();
	}

}
