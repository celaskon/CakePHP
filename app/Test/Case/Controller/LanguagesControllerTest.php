<?php
/* Languages Test cases generated on: 2011-11-28 23:04:41 : 1322521481*/
App::uses('LanguagesController', 'Controller');

/**
 * TestLanguagesController *
 */
class TestLanguagesController extends LanguagesController {
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
 * LanguagesController Test Case
 *
 */
class LanguagesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.language', 'app.language_text', 'app.text');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Languages = new TestLanguagesController();
		$this->Languages->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Languages);

		parent::tearDown();
	}

}
