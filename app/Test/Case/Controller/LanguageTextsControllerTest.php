<?php
/* LanguageTexts Test cases generated on: 2011-12-14 15:52:21 : 1323877941*/
App::uses('LanguageTextsController', 'Controller');

/**
 * TestLanguageTextsController *
 */
class TestLanguageTextsController extends LanguageTextsController {
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
 * LanguageTextsController Test Case
 *
 */
class LanguageTextsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.language_text', 'app.language', 'app.text');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->LanguageTexts = new TestLanguageTextsController();
		$this->LanguageTexts->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LanguageTexts);

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
