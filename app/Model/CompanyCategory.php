<?php
class CompanyCategory extends AppModel {
    public $name = 'CompanyCategory';
    public $belongsTo = array(
        'Category',
        'CompanyProfile'   
    );
    
    public function getCategory($company_profile_id){
      $t = $this->find('all', array("conditions"=>array("company_profile_id" => $company_profile_id),
			                              "fields" => array("category_id"))); 
      return $t['category_id'];			                          
    }
}
?>