<?php

App::uses('AppHelper','View/Helper');

class AppController extends Controller {

    public function beforeFilter() {
        if (isset($this->params['lang'])) {
            $this->Session->write('Config.language', $this->params['lang']);
            Configure::write('Config.language', $this->params['lang']);
        } elseif ($this->Session->read('Config.language')) {
            Configure::write('Config.language', $this->Session->read('Config.language'));
        }
        
        //$this->Auth->allow('index', 'view');
    }

    public function redirect($url, $status = null, $exit = true) {
        parent::redirect(AppHelper::router_url_language($url), $status, $exit);
    }

    public function flash($message, $url, $pause = 1) {
        parent::flash($message, AppHelper::router_url_language($url), $pause);
    }  
    
    
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'categories', 'action' => 'index'),             //event po prihlaseni
            'logoutRedirect' => array('controller' => 'categories', 'action' => 'index'),   // event po odhlaseni
            'authorize' => array('Controller')
        )
    );
    
    public function isAuthorized($user) {
      // Admin can access every action
      if (isset($user['role']) && $user['role'] === 'admin') {
          return true;
      }
      // Default deny
      return false;
    }

}

?>
