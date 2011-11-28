<?php
class Language extends AppModel {
    public $name = 'Language';
    public $hasMany = 'LanguageText'; 
}
?>