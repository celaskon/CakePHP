<?php
class CompanyProfile extends AppModel {
    public $name = 'CompanyProfile';
   
    public $actsAs = array(
        'Translate' => array(
            'info'
        )
    );                   
        
   
    public $belongsTo = array(
        'User',
    );

    public $hasMany = array(
        'Contact',
        'CompanyCategory',
        'Adress'
        );
        
}
?>