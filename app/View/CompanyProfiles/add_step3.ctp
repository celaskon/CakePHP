<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyProfile');?>
	
  <h2> <?php echo __('Add Company Profile Step 3/4: '); ?> </h2><br />
  <?php echo $this->Html->image('step3.png', array('alt' => 'step3', 'border' => 0));?>
  <div class="company_register">
    <h3>Company contacts:</h3>
	<?php

    $languages = Configure::read('Config.languages'); 

    
    echo $this->Form->hidden('Adress.company_profile_id', array('value' => 'NULL'));
    
    echo $this->Form->input('Contact.name', array('class' => 'input-text', 'label' => 'Name: ', 'size' => 50));
    echo $this->Form->input('Contact.phone', array('class' => 'input-text', 'label' => 'Phone number: ', 'size' => 50));
    echo $this->Form->input('Contact.phone', array('class' => 'input-text', 'label' => 'Email: ', 'size' => 50));
    
    echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
    echo '<a class="dalsiejazyky"  href="#">Pridať dalsie adresy: </a><br /><br />';
    
    echo $this->Form->button('<< Back');
    echo $this->Form->end(__('Next >>'));?>

	</div>
</div>

