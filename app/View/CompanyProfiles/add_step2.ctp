<script type="text/javascript">
  $(document).ready(function() {
   // hides the slickbox as soon as the DOM is ready
    $('#slickbox').hide();
   // shows the slickbox on clicking the noted link  
    $('#slick-show').click(function() {
      $('#slickbox').show('slow');
      return false;
    });
   // hides the slickbox on clicking the noted link  
    $('#slick-hide').click(function() {
      $('#slickbox').hide('fast');
      return false;
    });
   // toggles the slickbox on clicking the noted link  
    $('#slick-toggle').click(function() {
      $('#slickbox').toggle(400);
      return false;
    });
  });
</script> 
<?php //echo $this->Html->script('show-hide'); ?>


<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyProfile');?>
	
  <h2> <?php echo __('Add Company Profile Step 2/4: '); ?> </h2><br />
  <?php echo $this->Html->image('step2.png', array('alt' => 'step2', 'border' => 0));?>
  <div class="company_register">
    <h3>Company adress:</h3>
	<?php

    $languages = Configure::read('Config.languages'); 

    //echo 'data: <br />'; print_r($data); echo '<br /><br />';
    //echo 'languages: '; print_r($languages); echo'<br /><br />';
    
    echo $this->Form->hidden('Adress.company_profile_id', array('value' => 'NULL'));
    
    
    $i = 0;
    foreach ($languages as $language):
        //echo $language;   
        if ($i > 0){  echo'<div id="slickbox" style="display: block;">';}
        echo $this->Form->input('Adress.'.$i.'.name', array('class' => 'input-text', 'label' => 'Popis Adresy (Pobočka/Centrála): ('.$language.'): ', 'size' => 50));
        if ($i == 0) { 
          echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
          echo '<a id="slick-toggle" href="#"> Vyplniť popis v daľších jazykoch:</a><br /><br />';
        }
        if ($i > 0){ echo'</div>';}
        $i++;
    endforeach; 
    
    
    //echo $this->Form->input('user_id');
		echo $this->Form->input('Adress.name', array('class' => 'input-text', 'label' => 'Company Adress: ', 'rows' => 4, 'cols' => 39));
		/*echo $this->Form->input('CompanyProfile.ico', array('class' => 'input-text', 'label' => 'IČO: ', 'size' => 50));
		echo $this->Form->input('CompanyProfile.web_link', array('class' => 'input-text', 'label' => 'Web adress: ', 'size' => 50));
		
    echo '<b>Company Profile Description: </b><br />';
    echo $this->Form->textarea('CompanyProfile.info', array('rows' => 12, 'cols' => 39));
		                
		
    echo '<br />';  */
	


	echo '<a class="dalsiejazyky"  href="#">Pridať dalsie adresy: </a><br /><br />';
  /*echo '<div class="jazyk_form">';
  echo $this->Form->textarea('CompanyProfile.info', array('rows' => 12, 'cols' => 39));
  echo '</div>';*/
  echo $this->Form->button('<< Back');
  echo $this->Form->end(__('Next >>'));?>

	</div>
</div>

