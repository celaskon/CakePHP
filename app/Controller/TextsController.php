<?php
App::uses('AppController', 'Controller');
/**
 * Texts Controller
 *
 * @property Text $Text
 */
class TextsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Text->recursive = 0;
		$this->set('texts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		$this->set('text', $this->Text->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Text->create();
			if ($this->Text->save($this->request->data)) {
				$this->Session->setFlash(__('The text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Text->save($this->request->data)) {
				$this->Session->setFlash(__('The text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Text->read(null, $id);
		}
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
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		if ($this->Text->delete()) {
			$this->Session->setFlash(__('Text deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Text was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
