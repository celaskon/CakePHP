<?php
App::uses('AppController', 'Controller');
/**
 * CompanyCategories Controller
 *
 * @property CompanyCategory $CompanyCategory
 */
class CompanyCategoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CompanyCategory->recursive = 0;
		$this->set('companyCategories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CompanyCategory->id = $id;
		if (!$this->CompanyCategory->exists()) {
			throw new NotFoundException(__('Invalid company category'));
		}
		$this->set('companyCategory', $this->CompanyCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyCategory->create();
			if ($this->CompanyCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The company category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->CompanyCategory->Category->find('list');
		$companyProfiles = $this->CompanyCategory->CompanyProfile->find('list');
		$this->set(compact('categories', 'companyProfiles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CompanyCategory->id = $id;
		if (!$this->CompanyCategory->exists()) {
			throw new NotFoundException(__('Invalid company category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CompanyCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The company category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CompanyCategory->read(null, $id);
		}
		$categories = $this->CompanyCategory->Category->find('list');
		$companyProfiles = $this->CompanyCategory->CompanyProfile->find('list');
		$this->set(compact('categories', 'companyProfiles'));
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
		$this->CompanyCategory->id = $id;
		if (!$this->CompanyCategory->exists()) {
			throw new NotFoundException(__('Invalid company category'));
		}
		if ($this->CompanyCategory->delete()) {
			$this->Session->setFlash(__('Company category deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
