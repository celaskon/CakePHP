<?php
App::uses('AppController', 'Controller');
/**
 * CompanyProfiles Controller
 *
 * @property CompanyProfile $CompanyProfile
 */
class CompanyProfilesController extends AppController {
  
  public $uses = array('CompanyProfile', 'Category', 'Adress', 'Contact', 'CompanyCategory'); 
  public $helpers = array('Form', 'Html', 'Js' => array('jQuery'), 'Time','TinyMce');
   
 
  
  
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
		
		$companyProfile = $this->CompanyProfile->find('first', array('conditions' => array('CompanyProfile.id' => $id))); // ->read(null, $id)? - treba vstupne parametre?
    $this->set('companyProfile', $companyProfile);
    
    
    $info = $this->CompanyCategory->find('first', array('conditions' => array('CompanyProfile.id' => $id)));
    foreach ($info as $key): // info o kategoriach v DB
      $array[] = $this->Category->find('first', array('conditions' => array('Category.id' => $key))); 
    endforeach;
    
    $info = array();
    $i = 0;
    foreach ($array as $key):   // nazvy kategorii a rodicovskych kategorii
      if (empty($key['ChildCategory'])){
        
        $parent = $this->Category->find('first', array('conditions' => array('Category.id' => $key['ParentCategory']['id']))); 
        $Gparent = $this->Category->find('first', array('conditions' => array('Category.id' => $parent['ParentCategory']['id']))); 
        
        $info[$i][1] = $Gparent['Category']['name'];
        $info[$i][2] = $parent['Category']['name'];
        $info[$i][3] = $key['Category']['name'];
        $i++;
      }
    endforeach;
    
    $this->set('info', $info);

  }

//  add method
public function add() {
  
  $Categories = $this->Category->find('all'); // hlavne kategorie 
  $this->set('Categories', $Categories);
	
  $data = $this->request->data;
	$this->set('data', $data);
  
  
  if ($this->request->is('post')) {
    
    $this->CompanyProfile->set($this->request->data);
    if ($this->CompanyProfile->validates()) {
        // it validated logic
        $this->Session->write('CompanyProfile.1', $data);
        $this->redirect(array('action' => 'addStep2', $this->$data));
    } else {
        // didn't validate logic
        $errors = $this->CompanyProfile->validationErrors;
    }
	}
}  
	
	
public function addStep2() {
	
  $data = $this->request->data;
	$this->set('data', $data);      
  /*
  if ($this->request->is('button')) {
    $this->redirect(array('action' => 'add'));  
  }
  */
  if ($this->request->is('post') && ($data['back'] != 'back')) {
    if(1 == 1){  // it validated logic
        
	    $this->Session->write('CompanyProfile.2', $data);
      $this->redirect(array('action' => 'addStep3'));      
	  }
	}
	 elseif($this->request->is('post') && ($data['back'] == 'back')){
	   $this->redirect(array('action' => 'add'));  
  }
}	
	
	
public function addStep3() {
	  
  $data = $this->request->data;
	$this->set('data', $data);
    
  if ($this->request->is('post') && ($data['back'] != 'back')) {
    if(1 == 1){ 
        
      $this->Session->write('CompanyProfile.3', $data);
  	  $this->redirect(array('action' => 'addStep4'));
	  }
	}
	elseif($this->request->is('post') && ($data['back'] == 'back')){
	   $this->redirect(array('action' => 'addStep2'));  
  }
}	


public function addStep4() {
	  
  $Categories = $this->Category->find('all'); // hlavne kategorie 
  $this->set('Categories', $Categories);  
  
  $data = $this->request->data;
	$this->set('data', $data);
    
  if ($this->request->is('post') && ($data['back'] != 'back')) {
    if(1 == 1){ 
        
      $this->Session->write('CompanyProfile.4', $data);
    	$this->redirect(array('action' => 'addSummary'));
	  }
	}
	elseif($this->request->is('post') && ($data['back'] == 'back')){
	   $this->redirect(array('action' => 'addStep3'));  
  }
}	


public function addSummary() {
	
  $info = $this->Session->read('CompanyProfile'); // info o kategoriach v session
  $info = $info[4]['CompanyCategory'];
  
  foreach ($info as $key): // info o kategoriach v DB
    $array[] = $this->Category->find('first', array('conditions' => array('Category.id' => $key))); 
  endforeach;
  
  $info = array();
  $i = 0;
  foreach ($array as $key):   // nazvy kategorii a rodicovskych kategorii
    if (empty($key['ChildCategory'])){
      
      $parent = $this->Category->find('first', array('conditions' => array('Category.id' => $key['ParentCategory']['id']))); 
      $Gparent = $this->Category->find('first', array('conditions' => array('Category.id' => $parent['ParentCategory']['id']))); 
      
      $info[$i][1] = $Gparent['Category']['name'];
      $info[$i][2] = $parent['Category']['name'];
      $info[$i][3] = $key['Category']['name'];
      $i++;
    }
  endforeach;
  
  $this->set('info', $info);
  
  $data = $this->request->data;
  $session_data = $this->Session->read('CompanyProfile');
  $languages = Configure::read('Config.languages'); //pole jazykov
  
    
  if ($this->request->is('post') && ($data['back'] != 'back')) {
    if(1 == 1){ // ak zvalidovane
        // Company Profile save
        $this->CompanyProfile->bindTranslation(array('info' => 'nameTranslation'));
        $this->CompanyProfile->create();                                                                     
        $i = 0;
        foreach ($languages as $lang):
          $data_to_save['CompanyProfile'][$i]['name']     = $session_data[1]['CompanyProfile']['name'];
          $data_to_save['CompanyProfile'][$i]['ico']      = $session_data[1]['CompanyProfile']['ico'];
          $data_to_save['CompanyProfile'][$i]['web_link'] = $session_data[1]['CompanyProfile']['web_link'];
          $data_to_save['CompanyProfile'][$i]['locale']   = $lang;
          $data_to_save['CompanyProfile'][$i]['info']     = $session_data[1]['CompanyProfile'][$lang]['info'];
            
          $this->CompanyProfile->locale = $lang;
          $this->CompanyProfile->save($data_to_save['CompanyProfile'][$i]);
          $i++;
        endforeach;    
        $CompanyProfile_id = $this->CompanyProfile->getInsertID();
        
        // Company Address save
        $this->Adress->bindTranslation(array('name' => 'nameTranslation'));
        for ($j = 1; $j <= 4; $j++) {
          
          //if (!empty($session_data[2]['CompanyAddress'][$j]['Adress']['adress'])){ // pre kazdu vyplnenu adresu zavola create
            $this->Adress->create();
            $i = 0;
            
            foreach ($languages as $lang):
              
              $data_to_save[$j]['Adress'][$i]['company_profile_id'] = $CompanyProfile_id;
              $data_to_save[$j]['Adress'][$i]['locale']             = $lang;                                              
              $data_to_save[$j]['Adress'][$i]['name']               = $session_data[2]['CompanyAddress'][$j]['Adress'][$lang]['name'];
              $data_to_save[$j]['Adress'][$i]['adress']             = $session_data[2]['CompanyAddress'][$j]['Adress']['adress'];
                
              $this->Adress->locale = $lang;
              $this->Adress->save($data_to_save[$j]['Adress'][$i]);
              $i++;
            endforeach;
          //}
        }
        
        // Company Contacts save
        for ($j = 1; $j <= 4; $j++) {
          /*
          if ((!empty($session_data[3]['CompanyContact'][$j]['Contact']['name']))  ||  // ak je vyplneny lubovolna polozka kontaktu, zavola create
              (!empty($session_data[3]['CompanyContact'][$j]['Contact']['phone'])) ||
              (!empty($session_data[3]['CompanyContact'][$j]['Contact']['email']))) { 
          */
            $this->Contact->create();
              
            $data_to_save['Contact'][$j]['company_profile_id'] = $CompanyProfile_id;
            $data_to_save['Contact'][$j]['name']  = $session_data[3]['CompanyContact'][$j]['Contact']['name'];
            $data_to_save['Contact'][$j]['phone'] = $session_data[3]['CompanyContact'][$j]['Contact']['phone'];                                              
            $data_to_save['Contact'][$j]['email'] = $session_data[3]['CompanyContact'][$j]['Contact']['email'];
              
            $this->Contact->save($data_to_save['Contact'][$j]);
            $i++;
         // }
        }      
      
        // Company Categories save    
        $i = 0;  
        foreach ($array as $key):   // nazvy kategorii a rodicovskych kategorii
          if (empty($key['ChildCategory'])){
            $this->CompanyCategory->create();    
            
            $data_to_save['CompanyCategory'][$i]['company_profile_id'] = $CompanyProfile_id;
            $data_to_save['CompanyCategory'][$i]['category_id']        = $key['Category']['id'];                                              
              
            $this->CompanyCategory->save($data_to_save['CompanyCategory'][$i]);
            $i++;
          }  
        endforeach;       
      
  	$this->Session->setFlash(__('The category has been saved'));
  	$this->Session->delete('CompanyProfile');
    $this->redirect(array('action' => 'index'));
  	
	  }
	}
	elseif($this->request->is('post') && ($data['back'] == 'back')){
	   $this->redirect(array('action' => 'addStep4'));  
  }
}	
  
// edit method
	public function editProfile($id = null) {
		
		$this->CompanyProfile->id = $id;
		$this->set('id', $id);
    
    $this->CompanyProfile->bindTranslation(array('info' => 'nameTranslation'));
    
    $companyProfile = $this->CompanyProfile->find('first', array('conditions' => array('CompanyProfile.id' => $id))); // ->read(null, $id)? - treba vstupne parametre?
    $this->set('companyProfile', $companyProfile);
    
    $data = $this->request->data;
    $this->set('data', $data);
    
    if (!$this->CompanyProfile->exists()) {
			throw new NotFoundException(__('Invalid Company Profile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
      $this->CompanyProfile->bindTranslation(array('info' => 'nameTranslation'));
			
      $languages = Configure::read('Config.languages'); //pole jazykov
      $i = 0;
      $array = array('CompanyProfile' => $data['CompanyProfile']);
      foreach ($languages as $lang):
         $array['CompanyProfile']['info'] = $data['nameTranslation'][$i]['content']; 
         $this->CompanyProfile->locale = $lang;
         $this->CompanyProfile->save($array);  
         $i++;
      endforeach;  
      
      if(1 == 1) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
		  $this->CompanyProfile->bindTranslation(array('name' => 'nameTranslation'));
			$this->request->data = $this->CompanyProfile->read(null, $id);
		}
  }
  
  public function editAddress($id = null) {
		$this->Adress->id = $id;
		$this->set('id', $id);
    
    $this->Adress->bindTranslation(array('name' => 'nameTranslation'));
    
    $companyAddress = $this->Adress->find('all', array('conditions' => array('Adress.company_profile_id' => $id))); // ->read(null, $id)? - treba vstupne parametre?
    $this->set('companyAddress', $companyAddress);
    
    $data = $this->request->data;
    $this->set('data', $data);
    
		if ($this->request->is('post') || $this->request->is('put')) {
			
      $this->Adress->bindTranslation(array('name' => 'nameTranslation'));
			
      $languages = Configure::read('Config.languages'); //pole jazykov
      
      for ($i = 0; $i <= 3; $i++) {
        $array = $data['Form'][$i];
        foreach ($languages as $lang):
           $array['Adress']['name'] = $data['Form'][$i]['nameTranslation'][$lang]['content']; 
           $this->Adress->locale = $lang;
           $this->Adress->save($array);
        endforeach;  
        
      }
      if(1 == 1) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
		  $this->Adress->bindTranslation(array('name' => 'nameTranslation'));
			$this->request->data = $this->Adress->read(null, $id);
		}
  }
  
  public function editContact($id = null) {
		$this->Contact->id = $id;
		$this->set('id', $id);
    
    $companyContact = $this->Contact->find('all', array('conditions' => array('Contact.company_profile_id' => $id))); // ->read(null, $id)? - treba vstupne parametre?
    $this->set('companyContact', $companyContact);
    
    $data = $this->request->data;
    $this->set('data', $data);
    
		if ($this->request->is('post') || $this->request->is('put')) {
			
      
      for ($i = 0; $i <= 3; $i++) {
        $array = $data['Contact'][$i];
        $this->Contact->save($array);
      }
      if(1 == 1) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Contact->read(null, $id);
		}
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
 
 