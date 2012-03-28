<?php
App::uses('AppController', 'Controller');
/**
 * CompanyProfiles Controller
 *
 * @property CompanyProfile $CompanyProfile
 */
class CompanyProfilesController extends AppController {

  public $uses = array('CompanyProfile', 'Category'); 
  public $helpers = array('Form', 'Html', 'Js', 'Time');
  

	public function index() {
		$this->CompanyProfile->recursive = 0;
		$this->set('companyProfiles', $this->paginate());
	}


	public function view($id = null) {
		$this->CompanyProfile->id = $id;
		if (!$this->CompanyProfile->exists()) {
			throw new NotFoundException(__('Invalid company profile'));
		}
		
		$this->set('title_for_layout','name');   
		
		$companyProfile = $this->CompanyProfile->find(); // ->read(null, $id)? - treba vstupne parametre?
    $this->set('companyProfile', $companyProfile);
    
    //$categories = Array();
    //$this->Category->unbindModel( array('hasMany'=>array('CompanyCategory','ChildCategory')) , false );
    
    /*foreach ($companyProfile['CompanyCategory'] as $CompanyCategory):
       $this->Category->id = $CompanyCategory['category_id'];
       $categories[] = $this->Category->read();
    endforeach;
    
    
    $this->set('categories',$categories);
    $this->set('LT',$this->LanguageText); */
    //set('languageText', LanguageText->read(null, $id));
    
    

  }

//  add method
	public function add() {
	
	  $Categories = $this->Category->find('all'); // hlavne kategorie 
    $this->set('Categories', $Categories);
		
    $data = $this->request->data;
		$this->set('data', $data);
    
    if ($this->request->is('post')) {
			if(1 == 1){ 
        
        $this->Category->bindTranslation(array('name' => 'info'));
        $languages = Configure::read('Config.languages'); //pole jazykov
			
        $this->Category->create();
			  $this->Category->locale = $languages[0];
        $this->Category->save($data['Category'][0]);
        
        $i = 0;
        foreach ($languages as $lang):
          if ($lang == 'slo'){   //prvy jazyk preskoci
            $i++;
            continue;
          }  
          $this->Category->locale = $lang;
          $this->Category->save($data['Category'][$i]);
          $i++;
        endforeach;       
      
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
    
    /*if ($this->request->is('post')) {
			$this->CompanyProfile->create();
			if ($this->CompanyProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The company profile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company profile could not be saved. Please, try again.'));
			}
		}
		$infos = $this->CompanyProfile->Info->find('list');
		$users = $this->CompanyProfile->User->find('list');
		$this->set(compact('infos', 'users'));    */
	}

// edit method
	public function edit($id = null) {
		$this->CompanyProfile->id = $id;
		if (!$this->CompanyProfile->exists()) {
			throw new NotFoundException(__('Invalid company profile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CompanyProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The company profile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company profile could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CompanyProfile->read(null, $id);
		}
		$infos = $this->CompanyProfile->Info->find('list');
		$users = $this->CompanyProfile->User->find('list');
		$this->set(compact('infos', 'users'));
	}

// delete method
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CompanyProfile->id = $id;
		if (!$this->CompanyProfile->exists()) {
			throw new NotFoundException(__('Invalid company profile'));
		}
		if ($this->CompanyProfile->delete()) {
			$this->Session->setFlash(__('Company profile deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company profile was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}


/*
App::uses('AppController', 'Controller');
/**
 * CompanyProfiles Controller
 *

class CompanyProfilesController extends AppController {
 
  var $helpers = array('Form', 'Html', 'Paginator');
  
  /*function beforeFilter() {     // check for an active session or inspect user permissions.
    parent::beforeFilter();
  }
  
  public function index() {
    //$this->paginate = array('limit' => 10);
    $companyProfiles = $this->CompanyProfile->find('all');
    $this->set('companyProfiles', $companyProfiles);
    $this->render();
	}
	
 
  public function view($id) {
    $this->set('title_for_layout', 'skuska');
    
    
    $companyProfile = $this->CompanyProfile->find('all');
    $this->set('companyProfile', $companyProfile[$id]);
    
    
    $this->render();
        //action logic goes here..
  }

}
*/

