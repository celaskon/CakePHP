<div class="companyProfiles form">
<?php echo $this->Form->create('Adress');?>
  <h2> <?php echo __('Edit Company Adresses: '); ?> </h2>
  <div class="company_register">
    
  	<?php
      //TinyMceHelper::init();
  		 echo $this->TinyMce->init(array(
          'mode'=>'textareas',
          'theme'=>'spaceballs',
          'convert_urls'=>false,
          )
      );  
      $languages = Configure::read('Config.languages'); 
      //print_r($data);
      
      for ($i = 0; $i <= 3; $i++) {
        $j = 0;
        foreach ($languages as $language):
          if(isset($companyAddress[$i]['nameTranslation'][$j]['content'])){    
            $Address[$i][$language] = $companyAddress[$i]['nameTranslation'][$j]['content']; 
          } 
          else{
            $Address[$i][$language] = '';
          }
          $j++;
        endforeach;
        
        if(isset($companyAddress[$i]['Adress']['adress'])){ 
          $Address[$i]['adress'] = $companyAddress[$i]['Adress']['adress'];
        }
        else{ $name = '';}
      }
      
      
      for ($i = 0; $i <= 3; $i++) {
      
        echo $this->Form->hidden('Form.'.$i.'.Adress.id', array('value' => $companyAddress[$i]['Adress']['id']));
        echo $this->Form->hidden('Form.'.$i.'.Adress.company_profile_id', array('value' => $id));
      
        foreach ($languages as $language):
          echo $this->Form->input ('Form.'.$i.'.nameTranslation.'.$language.'.content', array('class' => 'input-text',
                                                                                              'label' => 'Popis Adresy (Pobočka/Centrála): ('.$language.'): ',
                                                                                              'size' => 50,
                                                                                              'value' =>   $Address[$i][$language]));
        endforeach; 
      
        echo $this->Form->input('Form.'.$i.'.Adress.adress', array('class' => 'input-text',
                                                                   'label' => 'Company Adress: ',
                                                                   'rows' => 4,
                                                                   'cols' => 39,
                                                                   'value' => $Address[$i]['adress']));
        echo'<br /><br /><br />';
      }
      
      echo '<br /><br />'; ?>        
    <div class="left"><?php echo $this->Form->end(__('Submit'));?></div>
	</div>
</div>

