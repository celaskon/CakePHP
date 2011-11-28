<?php
class User extends AppModel {
    public $name = 'User';
    
    public $hasOne = array('UserProfile' => array('dependent' => true,),
                           //alebo
                           'CompanyProfile' => array('dependent' => true,));
}
?>
