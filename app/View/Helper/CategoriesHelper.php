<?php
/* /app/views/helpers/CategoriesHelper.php */

class TextHelper extends AppHelper {
    
    
    function vypis_kategorie() {
      $lang_id = 1;    
      return $this->LanguageText->getContent($lang_id,  $text_id);      
    }
}

?>
