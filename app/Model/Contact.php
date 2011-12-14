<?php
class Contact extends AppModel {
    public $name = 'Contact';
    public $belongsTo = array(
        'CompanyProfile',
        'Info' => array(
            'className'  => 'Text',
            'foreignKey' => 'info_id',
            'dependent'  => true
        )
    );
}
?>