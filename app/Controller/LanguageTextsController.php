<?php
App::uses('AppController', 'Controller');
/**
 * LanguageTexts Controller
 *
 * @property LanguageText $LanguageText
 */
class LanguageTextsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LanguageText->recursive = 0;
		$this->set('languageTexts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->LanguageText->id = $id;
		if (!$this->LanguageText->exists()) {
			throw new NotFoundException(__('Invalid language text'));
		}
		$this->set('languageText', $this->LanguageText->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LanguageText->create();
			if ($this->LanguageText->save($this->request->data)) {
				$this->Session->setFlash(__('The language text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The language text could not be saved. Please, try again.'));
			}
		}
		$languages = $this->LanguageText->Language->find('list');
		$texts = $this->LanguageText->Text->find('list');
		$this->set(compact('languages', 'texts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->LanguageText->id = $id;
		if (!$this->LanguageText->exists()) {
			throw new NotFoundException(__('Invalid language text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LanguageText->save($this->request->data)) {
				$this->Session->setFlash(__('The language text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The language text could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LanguageText->read(null, $id);
		}
		$languages = $this->LanguageText->Language->find('list');
		$texts = $this->LanguageText->Text->find('list');
		$this->set(compact('languages', 'texts'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->LanguageText->id = $id;
		if (!$this->LanguageText->exists()) {
			throw new NotFoundException(__('Invalid language text'));
		}
		if ($this->LanguageText->delete()) {
			$this->Session->setFlash(__('Language text deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Language text was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
