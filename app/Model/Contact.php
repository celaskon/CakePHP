<?php
class Contact extends AppModel {
    public $name = 'Contact';
    public $belongsTo = array(
        'CompanyProfile',
    );
}
?>