<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyProfile');?>
	
  <h2> <?php echo __('Add Company Profile Step 4/4: '); ?> </h2><br />
  <?php echo $this->Html->image('step4.png', array('alt' => 'step4', 'border' => 0));?>
  <div class="company_register">
    <h3>Add company categories:</h3>
	<?php

    $languages = Configure::read('Config.languages'); 
    
    echo $this->Form->hidden('Adress.company_profile_id', array('value' => 'NULL'));

   
    foreach ($Categories as $Category): //1. uroven
      
      if ($Category['Category']['category_id'] == 0){
          echo '<div class="level1_div">';
          echo $this->Form->input('Category.category_id',array('type' => 'checkbox', 
                                                               'class' => 'checkbx',
                                                               'div' => false, 
                                                               'hiddenField' => false, 
                                                               'label'=> $Category['Category']['name'], 
                                                               'value' => $Category['Category']['id']));
          $parent_id = $Category['Category']['id']; //aktualne id
          
          foreach ($Categories as $SubCategory): // 2.uroven - vypis pre dane id
              if ($parent_id == $SubCategory['ParentCategory']['id']){
                  echo '<div class="level2_div">';
                  echo $this->Form->input('Category.category_id',array('type' => 'checkbox',
                                                               'class' => 'checkbx',
                                                               'div' => false, 
                                                               'hiddenField' => false, 
                                                               'label' => array('text'=> $SubCategory['Category']['name']), 
                                                               'value' => $SubCategory['Category']['id']));  
                  $parent_id_level2 = $SubCategory['Category']['id']; //aktualne id 3. uroven
                  
                  foreach ($Categories as $key): // vypis pre 3. uroven podla id
                      if ($parent_id_level2 == $key['ParentCategory']['id']){
                          echo '<div class="level3_div">'; 
                          echo $this->Form->input('Category.id',array('type' => 'checkbox', 
                                                                       'class' => 'checkbx',
                                                                       'div' => false, 
                                                                       'hiddenField' => false, 
                                                                       'label' => array('text'=> $key['Category']['name']), 
                                                                       'value' => $key['Category']['id'])); 
                      echo '</div>';                                                      
                    }
                  endforeach;
              
              echo '</div>';    
              }
                
          endforeach; 
      
       echo'</div>';
      }
     
    endforeach;   
    
    //echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
    echo '<br /><br />';
    
    echo $this->Form->button('<< Back');
    echo $this->Form->end(__('Next >>'));?>
    
	</div>
</div>

