<?php
class Category extends AppModel {
  public $name = 'Category';
  
  public $actsAs = array(
        'Translate' => array(
            'name'
        )
    );  
  
  public $belongsTo = array('ParentCategory' => array('className' => 'Category', 'foreignKey' => 'category_id'));
   
  public $hasMany = array(
        'CompanyCategory',
        'ChildCategory' => array('className' => 'Category', 'foreignKey' => 'category_id')); 
  
}
?>
