<?php
/* /app/views/helpers/TextHelper.php */

class TextHelper extends AppHelper {
    
        
    public function __construct(View $View, $settings=array()) {
      parent::__construct($View, $settings);
      $this->LT = ClassRegistry::init("LanguageText"); 
    }
    
    function get($text_id) {
      $lang_id = 1;    
      return $this->LT->getContent($lang_id,  $text_id);      
    }
}

?>
