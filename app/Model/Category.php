<?php
class Category extends AppModel {
  public $name = 'Category';
  
  public $belongsTo = array('ParentCategory' => array('className' => 'Category', 'foreignKey' => 'category_id'),
                            'Name' => array('className' => 'Text', 'foreignKey' => 'name_id'));  
  public $hasMany = array(
        'CompanyCategory',
        'ChildCategory' => array('className' => 'Category', 'foreignKey' => 'category_id')); 
  
}
?>
