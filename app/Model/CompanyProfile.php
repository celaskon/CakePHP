<?php
class CompanyProfile extends AppModel {
    public $name = 'CompanyProfile';
    public $belongsTo = array(
        'User',
        'Info' => array(
            'className'  => 'Text',
            'foreignKey' => 'info_id'
            'dependent'  => true
        )
    );
   
    public $hasMany = array(
        'Contact',
        'Category'
    );
   
}
    
    
?>