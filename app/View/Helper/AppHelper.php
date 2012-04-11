<?php

App::uses('Helper', 'View');

class AppHelper extends Helper {

    public function url($url = null, $full = false) {
        return parent::url(AppHelper::router_url_language($url), $full);
    }
    
    public static function router_url_language($url) {
        $languages = Configure::read('Config.languages');
        $defaultLanguage = $languages[0]; 
        if ($lang = Configure::read('Config.language')) {
            if (is_array($url)) {
                if (!isset($url['lang'])) {
                    $url['lang'] = $lang;
                }
                if ($url['lang'] == $defaultLanguage) {
                    unset($url['lang']);
                }
            } else if ($url == '/' && $lang !== $defaultLanguage) {
                $url.= $lang;
            }
        }

        return $url;
    }

}
  
?>
