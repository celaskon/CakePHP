<div class="company_register">
<?php echo $this->Form->create('Category');?>
		<h2><?php echo __('Edit Category'); ?></h2>
	<?php
	  
    $languages = Configure::read('Config.languages');
    //print_r($languages); echo '<br /><br />';
    
    echo $this->Form->hidden('Category.id', array('value' => $id));
    echo $this->Form->hidden('Category.category_id', array('value' => 'NULL'));
    
    $i = 0;
    foreach ($languages as $language): 
    
        echo $language;   
        //		echo $this->Form->input('Category.name', array('label' => 'Category Name:'));  
    		echo $this->Form->hidden('nameTranslation.'.$i.'.id', array('value' => $this->request->data['nameTranslation'][$i]['id'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.locale', array('value' => $this->request->data['nameTranslation'][$i]['locale'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.model', array('value' => $this->request->data['nameTranslation'][$i]['model'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.foreign_key', array('value' => $this->request->data['nameTranslation'][$i]['foreign_key'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.field', array('value' => $this->request->data['nameTranslation'][$i]['field'])); 
    		echo $this->Form->input ('nameTranslation.'.$i.'.content', array('label' => 'Category Name:')); 
        $i++; 
         
    endforeach; 
    
	?>
  <br /><br />
  <div class="left"><?php echo $this->Form->end(__('Submit'));?></div>
</div>



<?php

Array ( 
    
    [CompanyProfile] => Array ( 
        
        [id] => 1 
        [user_id] => 0 
        [name] => ALFABETON s.r.o.- Mačkov 
        [ico] => 25162331 
        [web_link] => www.alfabeton.cz 
        [public] => 
        [locale] => slo 
        [info] =>  Naše firma provozuje dvě betonárny typ SB 20, každá s hodinovým výkonem 20 m³ čerstvého betonu a s celoročním poloautomatickým provozem.
    
    )
    
    
    [User] => Array ( 
        [id] => 
        [group_id] => 
        [login] => 
        [password] => 
     ) 
     
     [Contact] => Array ( 
        
        [0] => Array ( 
            [id] => 1 
            [company_profile_id] => 1 
            [name] => Obchodník 
            [phone] => 383 423 577 
            [email] => alfabeton@volny.cz ) 
        
        [1] => Array ( 
            [id] => 2 
            [company_profile_id] => 1 
            [name] => Dispečerka 
            [phone] => 603 116 284 
            [email] => ) 
      ) 
      
      
      [CompanyCategory] => Array ( 
          
          [0] => Array ( 
              [category_id] => 50 
              [company_profile_id] => 1 ) 
      ) 
      
      [Adress] => Array ( 
          
          [0] => Array ( 
              [id] => 7 
              [company_profile_id] => 1 
              [adress] => Mačkov 63
                          388 01 Blatná
                          okres Strakonice)   
          
          [1] => Array ( 
              [id] => 8 
              [company_profile_id] => 1 
              [adress] => Další betonárna:
                          ALFABETON s.r.o. , 388 01 Blatná , okr. Strakonice) 
      ) 
      
      [nameTranslation] => Array ( 
          
          [0] => Array ( 
              [id] => 170 
              [locale] => slo 
              [model] => CompanyProfile 
              [foreign_key] => 1 
              [field] => info 
              [content] => Naše firma provozuje dvě betonárny typ SB 20, každá s hodinovým výkonem 20 m³ čerstvého betonu a s celoročním poloautomatickým provozem.
          ) 
          
          [1] => Array ( 
              
              [id] => 171 
              [locale] => eng 
              [model] => CompanyProfile 
              [foreign_key] => 1 
              [field] => info 
              [content] => ) ) ) 

?>