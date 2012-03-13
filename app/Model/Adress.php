<?php
class Adress extends AppModel {
    public $name = 'Adress';
    public $belongsTo = array(
        'CompanyProfile',
    );
}
?>                                                                   