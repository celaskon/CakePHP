<?php
class LanguageText extends AppModel {
    public $name = 'LanguageText';
    public $belongsTo = array(
        'Language',
        'Text'   
    );
    
    public function getContent($language_id, $text_id){
      $t = $this->find('first', array("conditions"=>array("language_id" => $language_id, "text_id" => $text_id),
			                              "fields" => array("content"))); 
      return $t['LanguageText']['content'];			                          
    }
}
?>