<?php
class Category extends AppModel {
  public $name = 'Category';
  public $belongsTo = 'Category';
  public $hasMany = 'CompanyProfile';  

  public $belongsTo = array(
        'Name'
                'className'              => 'Text',
               'foreignKey'             => 'name_id',
    );

}
?>