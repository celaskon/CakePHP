<?php
class Contact extends AppModel {
    public $name = 'Contact';
    public $belongsTo = array(
        'CompanyProfile',
    );
    
    public $actsAs = array(
        'Translate' => array(
            'name'
        )
    ); 
}
?>