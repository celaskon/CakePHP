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
    }

    public function redirect($url, $status = null, $exit = true) {
        parent::redirect(AppHelper::router_url_language($url), $status, $exit);
    }

    public function flash($message, $url, $pause = 1) {
        parent::flash($message, AppHelper::router_url_language($url), $pause);
    }

}

?>
