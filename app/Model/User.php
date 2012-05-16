<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
    /*
    public $name = 'User';
    public $belongsTo = 'Group'; 
    
    public $hasOne = array(
        'UserProfile' => array(
            'dependent' => true,
        ),
        //alebo
        'CompanyProfile' => array(
            'dependent' => true,
        )
    ); */
    
    public $name = 'User';
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'user')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
    
    
    public function beforeSave() {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

}    
?>