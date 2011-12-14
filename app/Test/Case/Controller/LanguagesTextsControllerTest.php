<?php
/* LanguagesTexts Test cases generated on: 2011-11-28 23:09:32 : 1322521772*/
App::uses('LanguagesTextsController', 'Controller');

/**
 * TestLanguagesTextsController *
 */
class TestLanguagesTextsController extends LanguagesTextsController {
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
 * LanguagesTextsController Test Case
 *
 */
class LanguagesTextsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.languages_text');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->LanguagesTexts = new TestLanguagesTextsController();
		$this->LanguagesTexts->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LanguagesTexts);

		parent::tearDown();
	}

}
