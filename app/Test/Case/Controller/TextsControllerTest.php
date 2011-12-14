<?php
/* Texts Test cases generated on: 2011-12-14 14:26:34 : 1323872794*/
App::uses('TextsController', 'Controller');

/**
 * TestTextsController *
 */
class TestTextsController extends TextsController {
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
 * TextsController Test Case
 *
 */
class TextsControllerTestCase extends CakeTestCase {
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

		$this->Texts = new TestTextsController();
		$this->Texts->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Texts);

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
