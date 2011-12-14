<?php
class Adress extends AppModel {
    public $name = 'Adress';
    public $belongsTo = array(
        'CompanyProfile',
        'Info' => array(
            'className'  => 'Text',
            'foreignKey' => 'name_id',
            'dependent'  => true
        )
    );
}
?>                                                                   