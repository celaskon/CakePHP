<?php
/* UserProfiles Test cases generated on: 2011-11-28 22:40:50 : 1322520050*/
App::uses('UserProfilesController', 'Controller');

/**
 * TestUserProfilesController *
 */
class TestUserProfilesController extends UserProfilesController {
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
 * UserProfilesController Test Case
 *
 */
class UserProfilesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_profile', 'app.user', 'app.company_profile', 'app.text', 'app.language_text', 'app.language', 'app.contact');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserProfiles = new TestUserProfilesController();
		$this->UserProfiles->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserProfiles);

		parent::tearDown();
	}

}
