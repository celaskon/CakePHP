<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {

  public $uses = array('Category', 'CompanyCategory');
  
  /*public function beforeFilter() {
        $this->Session->write('Config.language', 'slo');
        Configure::write('Config.language', $this->Session->read('Config.language'));
  } */
  
  
  //public $helpers = array('Form', 'Html', 'Js', 'Time');


	public function index() {
    
    if (isset($this->params['url']['lang'])){ 
      $this->Session->write('Config.language',$this->params['url']['lang']);
      Configure::write('Config.language', $this->Session->read('Config.language'));
    } 
    
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
		
    $L = $this->Session->check('Config.language');
    $this->set('L', $L);
    
    $this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
    
    $subCategories = $this->Category->find('all', array('conditions' => array('Category.category_id' => $id))); // podkategorie
    $this->set('subCategories', $subCategories); 
    
    $this->set('category', $this->Category->read(null, $id));
    
    $level1 = $this->Category->find('first', array('conditions' => array('Category.id' => $id))); 
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */

	
	public function view_companies($id = null) {
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
    
    $level1 = $this->Category->find('first', array('conditions' => array('Category.id' => $id))); 
    $level2 = $this->Category->find('first', array('conditions' => array('Category.id' => $level1['Category']['category_id'])));
    $level3 = $this->Category->find('first', array('conditions' => array('Category.id' => $level2['Category']['category_id']))); 
    $this->set('level2', $level2);
    $this->set('level3', $level3);
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		
    $data = $this->request->data;
		$this->set('data', $data);
    
    if ($this->request->is('post')) {
			if(1 == 1){ 
        
        $this->Category->bindTranslation(array('name' => 'nameTranslation'));
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
	}
	
	
	/**
 * add method
 *
 * @return void
 */
	public function add_subcategory($id) {
	
		$this->set('category', $this->Category->read(null, $id));
		$data = $this->request->data;
		$this->set('data', $data);
    
    if ($this->request->is('post')) {
			if(1 == 1){ 
        
        $this->Category->bindTranslation(array('name' => 'nameTranslation'));
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
      
				$this->Session->setFlash(__('The SubCategory has been saved'));
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
		//$this->Category->bindTranslation(array('name' => 'nameTranslation'));
		
    $this->Category->id = $id;
		$this->set('id', $id);
		
		$data = $this->request->data;
		$this->set('data', $data);
		
    if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
      $this->Category->bindTranslation(array('name' => 'nameTranslation'));
			
      $languages = Configure::read('Config.languages'); //pole jazykov
      $i = 0;
      $array = array( 'Category' => $data['Category'] );
      foreach ($languages as $lang):
         $array['Category']['name'] = $data['nameTranslation'][$i]['content']; 
         $this->Category->locale = $lang;
         $this->Category->save($array);
         $i++;
      endforeach;  
      
      if(1 == 1) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
		  $this->Category->bindTranslation(array('name' => 'nameTranslation'));
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
		
		$Categories = $this->Category->find('all', array('conditions' => array('Category.category_id' => 0))); // hlavne kategorie 
    $this->set('Categories', $Categories);
		
		$data = $this->request->data;
		$this->set('data', $data);
		
    if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
      $this->Category->bindTranslation(array('name' => 'nameTranslation'));
			
      $languages = Configure::read('Config.languages'); //pole jazykov
      $i = 0;
      $array = array( 'Category' => $data['Category'] );
      foreach ($languages as $lang):
         $array['Category']['name'] = $data['nameTranslation'][$i]['content']; 
         $this->Category->locale = $lang;
         $this->Category->save($array);
         $i++;
      endforeach;  
      
      if(1 == 1) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
		  $this->Category->bindTranslation(array('name' => 'nameTranslation'));
			$this->request->data = $this->Category->read(null, $id);
		}
	
	}  
	
	
	public function view_subcategory_level2($id = null) {
		
    $this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
    $subCategories = $this->Category->find('all', array('conditions' => array('Category.category_id' => $id))); // podkategorie
    $this->set('subCategories', $subCategories); 
    
    $this->set('category', $this->Category->read(null, $id));
    
    $level1 = $this->Category->find('first', array('conditions' => array('Category.id' => $id))); 
    $level2 = $this->Category->find('first', array('conditions' => array('Category.id' => $level1['Category']['category_id']))); 
    $this->set('level2', $level2);
	}
	
	
	public function add_subcategory_level2($id) {
	
		$this->set('category', $this->Category->read(null, $id));
		$data = $this->request->data;
		$this->set('data', $data);
    
    if ($this->request->is('post')) {
			if(1 == 1){ 
        
        $this->Category->bindTranslation(array('name' => 'nameTranslation'));
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
      
				$this->Session->setFlash(__('The SubCategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
	}
	
	
	public function edit_subcategory_level2($id = null) {
		
    $this->Category->id = $id;
		$this->set('id', $id);
		
		$Categories = $this->Category->find('all', array('conditions' => array('Category.category_id' => 0))); // hlavne kategorie 
    $this->set('Categories', $Categories);
		
		$data = $this->request->data;
		$this->set('data', $data);
		
    if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
      $this->Category->bindTranslation(array('name' => 'nameTranslation'));
			
      $languages = Configure::read('Config.languages'); //pole jazykov
      $i = 0;
      $array = array( 'Category' => $data['Category'] );
      foreach ($languages as $lang):
         $array['Category']['name'] = $data['nameTranslation'][$i]['content']; 
         $this->Category->locale = $lang;
         $this->Category->save($array);
         $i++;
      endforeach;  
      
      if(1 == 1) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
		  $this->Category->bindTranslation(array('name' => 'nameTranslation'));
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
