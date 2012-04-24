<script type="text/javascript">
  $(document).ready(function() {
   // hides the slickbox as soon as the DOM is ready
    $('.slickbox').hide();
   // shows the slickbox on clicking the noted link  
    $('.slick-show').click(function() {
      $('.slickbox').show('slow');
      return false;
    });
   // hides the slickbox on clicking the noted link  
    $('.slick-hide').click(function() {
      $('.slickbox').hide('fast');
      return false;
    });
   // toggles the slickbox on clicking the noted link  
    $('.slick-toggle').click(function() {
      $('.slickbox').toggle(100);
      return false;
    });
  });
</script>


<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyProfile');?>
	
  <h2> <?php echo __('Add Company Profile Step 1/4: '); ?> </h2><br />
  <?php echo $this->Html->image('step1.png', array('alt' => 'step1', 'border' => 0));?>
  
  
  <div class="company_register">
  <h3>Basic info:</h3>
	<?php
		
		//print_r($data);
		$session_data = $this->Session->read('CompanyProfile');
		//print_r($session_data);
		
    //TinyMceHelper::init();
		 echo $this->TinyMce->init(array(
        'mode'=>'textareas',
        'theme'=>'spaceballs',
        'convert_urls'=>false,
        )
    );  
    
    $languages = Configure::read('Config.languages'); 

    //echo $this->Form->input('user_id');
		echo $this->Form->input('CompanyProfile.name', array('class' => 'input-text', 'label' => 'Company Name: ', 'size' => 50, /*'value' => $session_data[1]['CompanyProfile']['name']*/));
		echo $this->Form->input('CompanyProfile.ico', array('class' => 'input-text', 'label' => 'IČO: ', 'size' => 50));
		echo $this->Form->input('CompanyProfile.web_link', array('class' => 'input-text', 'label' => 'Web adress (http://...): ', 'size' => 50));
		
    echo '<b>Company Profile Description: </b><br />';
		                
		$i = 0;
    foreach ($languages as $language):
        //echo $language;   
        if ($i > 0){  
          //echo'<div class="slickbox">';
          echo'<b>Company Profile Description: </b>'; echo $language. '<br />';
        }
        
        echo $this->Form->textarea('CompanyProfile.'.$language.'.info', array('class' => 'input-text', 'rows' => 12, 'cols' => 39));
        
        if ($i == 0) { 
          echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
          echo '<a class="slick-toggle" href="#"> Vyplniť popis v daľších jazykoch:</a><br /><br />';
        }
        
        if ($i > 0){ 
          //echo'</div>';
        }
        $i++;
    endforeach; 
		
    echo '<br /><br />';

    echo $this->Form->end(__('Next >>'));?>        
    
    
	
	</div>
</div>
