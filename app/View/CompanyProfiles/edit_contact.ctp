<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyContact');?>
	
  <h2> <?php echo __('Edit Company Contacts: '); ?> </h2><br />
  <div class="company_register">
    <h3>Company contacts:</h3>
	<?php

    $languages = Configure::read('Config.languages'); 
		//print_r($companyContact);
                                                                         
    for ($j = 0; $j <= 3; $j++) {
      echo $this->Form->hidden('Contact.'.$j.'.Contact.id', array('value' =>  $companyContact[$j]['Contact']['id']));
      echo $this->Form->hidden('Contact.'.$j.'.Contact.company_profile_id', array('value' => $id));
      
      echo $this->Form->input ('Contact.'.$j.'.Contact.name', array('class' => 'input-text',
                                                                   'label' => 'Name: ', 
                                                                   'size' => 50,
                                                                   'value' =>  $companyContact[$j]['Contact']['name']));
                                                        
      echo $this->Form->input('Contact.'.$j.'.Contact.phone', array('class' => 'input-text', 
                                                                    'label' => 'Phone number: ',
                                                                    'size' => 50,
                                                                    'value' =>  $companyContact[$j]['Contact']['phone']));
                                                         
      echo $this->Form->input('Contact.'.$j.'.Contact.email', array('class' => 'input-text',
                                                                    'label' => 'Email: ', 
                                                                    'size' => 50,
                                                                    'value' => $companyContact[$j]['Contact']['email']));
      echo '<br /><br /><br />';
    }
    
    echo '<br /><br />'; ?>        
  <div class="left"><?php echo $this->Form->end(__('Submit'));?></div>
</div>

