<?php
class Group extends AppModel {
    public $name = 'Group';
    
    public $hasMany = array(
        'User' => array(
            'dependent' => false,
        )
    );
}    
?>