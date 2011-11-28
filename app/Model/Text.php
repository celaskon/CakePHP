<?php
class Text extends AppModel {
    public $name = 'Text';
    
    public $hasMany = array('LanguageText');
    
}
?>
