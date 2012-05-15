<?php
class CompanyProfile extends AppModel {
    public $name = 'CompanyProfile';
   
    public $actsAs = array(
        'Translate' => array(
            'info'
        )
    );                   
    
    public $validate = array(
        'name' => array(
                'rule'     => 'notEmpty',
                'required' => true,
                'message'  => 'This field cannot be left blank.'
        ),
        'ico' => array(
                'required' => false,
                'rule'    => 'numeric',
                'message' => 'Enter numbers only.'
        ),
        'web_link' => array(
                'rule'    => 'url',
                'message' => 'Enter correct url adress.'
        ),
        
    );    
   
    public $belongsTo = array(
        'User'
    );

    public $hasMany = array(
        'Contact',
        'CompanyCategory',
        'Adress'
    );
        
}
?>