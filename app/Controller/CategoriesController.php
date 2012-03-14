<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {

  public $uses = array('Category', 'CompanyCategory');
  //public $helpers = array('Form', 'Html', 'Js', 'Time', 'Text');
/**
 * index method
 *
 * @return void
 */
	public function index() {

    $mainCategories = $this->Category->find('all', array("conditions"=> "Category.category_id = 0")); 
    $this->set('mainCategories', $mainCategories);   
    
    $this->set('LT',$this->LanguageText);
    $this->Category->recursive = 0;
		$this->set('categories', $this->paginate());  
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
    //$mainCategorys = $this->Category->find('first', array('conditions' => array('Category.category_id' => $id))); // hlavna kategoria 
    //$this->set('mainCategorys', $mainCategorys);
    
    $subCategories = $this->Category->find('all', array('conditions' => array('Category.category_id' => $id))); // podkategorie
    $this->set('subCategories', $subCategories); 
    
    $this->set('category', $this->Category->read(null, $id));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */

	
	public function viewCompanies($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
    //$mainCategorys = $this->Category->find('first', array('conditions' => array('Category.category_id' => $id))); // hlavna kategoria 
    //$this->set('mainCategorys', $mainCategorys);
    
    $companies = $this->CompanyCategory->find('all', array('conditions' => array('CompanyCategory.category_id' => $id))); // podkategorie
    $this->set('companies', $companies); 
    
    
    $subCategories = $this->Category->find('all', array('conditions' => array('Category.category_id' => $id))); // podkategorie
    $this->set('subCategories', $subCategories); 
    $this->set('LT',$this->LanguageText);  
    
    $this->set('category', $this->Category->read(null, $id));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
	//	$parentCategories = $this->Category->ParentCategory->find();
		//$names = $this->Category->Name->find();
	//	$this->set(compact('parentCategories', 'names'));
	}
	
	
	/**
 * add method
 *
 * @return void
 */
	public function add_subcategory($id) {
	
		$this->set('category', $this->Category->read(null, $id));
		
    if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
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
		
    $this->Category->id = $id;
		$this->set('id', $id);
		
    if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Category->read(null, $id);
		}
	
	}
	
	/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit_subcategory($id = null) {
		
    $this->Category->id = $id;
		$this->set('id', $id);
		
    if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Category->read(null, $id);
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
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('Category deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
