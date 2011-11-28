<?php
class LanguageText extends AppModel {
    public $name = 'LanguageText';
    public $belongsTo = array(
        'Language',
        'Text'   
    );
}
?>