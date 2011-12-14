<?php
class CompanyCategory extends AppModel {
    public $name = 'CompanyCategory';
    public $belongsTo = array(
        'Category',
        'CompanyProfile'   
    );
}
?>