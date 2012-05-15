<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyContact');?>
	
  <h2> <?php echo __('Add Company Profile Step 3/4: '); ?> </h2><br />
  <?php echo $this->Html->image('step3.png', array('alt' => 'step3', 'border' => 0));?>
  <div class="company_register">
    <h3>Company contacts:</h3>
	<?php

    $languages = Configure::read('Config.languages'); 

    $session_data = $this->Session->read('CompanyProfile');
		//print_r($session_data);
    
    for ($j = 1; $j <= 4; $j++) { // ak je nastavena session -> nastavi posty pre vsetky inputy
  
      if(isset($session_data[3]['CompanyContact'][$j]['Contact']['name'])){ 
        $CompanyAddress[$j]['name'] = $session_data[3]['CompanyContact'][$j]['Contact']['name'];
      }
      else{ 
        $CompanyAddress[$j]['name'] = '';
      }
      
      if(isset($session_data[3]['CompanyContact'][$j]['Contact']['email'])){ 
        $CompanyAddress[$j]['phone'] = $session_data[3]['CompanyContact'][$j]['Contact']['phone'];
      }
      else{ 
        $CompanyAddress[$j]['phone'] = '';
      }
      
      if(isset($session_data[3]['CompanyContact'][$j]['Contact']['email'])){ 
        $CompanyAddress[$j]['email'] = $session_data[3]['CompanyContact'][$j]['Contact']['email'];
      }
      else{ 
        $CompanyAddress[$j]['email'] = '';
      }
    }
    
    for ($j = 1; $j <= 4; $j++) {
      echo $this->Form->input($j.'.Contact.name', array('class' => 'input-text',
                                                        'label' => 'Name: ', 
                                                        'size' => 50,
                                                        'value' =>  $CompanyAddress[$j]['name']));
                                                        
      echo $this->Form->input($j.'.Contact.phone', array('class' => 'input-text', 
                                                         'label' => 'Phone number: ',
                                                         'size' => 50,
                                                         'value' =>  $CompanyAddress[$j]['phone']));
                                                         
      echo $this->Form->input($j.'.Contact.email', array('class' => 'input-text',
                                                         'label' => 'Email: ', 
                                                         'size' => 50,
                                                         'value' =>  $CompanyAddress[$j]['email']));
      echo '<br /><br /><br />';
    }
    
    //echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
    //echo '<a class="dalsiejazyky"  href="#">Pridať dalsie kontakty: </a><br /><br />';
    
    echo $this->Form->button('<< Back', array('name' => 'data[back]', 'value' => 'back'));
    echo $this->Form->end(__('Next >>'));?>

	</div>
</div>

