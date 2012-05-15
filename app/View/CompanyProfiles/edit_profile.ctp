<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyProfile');?>
  <h2> <?php echo __('Edit Company Profile: '); ?> </h2>
  <div class="company_register">
    
    <h3>Basic info:</h3>
  	<?php
  	
      //TinyMceHelper::init();
  		 echo $this->TinyMce->init(array(
          'mode'=>'textareas',
          'theme'=>'spaceballs',
          'convert_urls'=>false,
          )
      );  
     //print_r($data);
    $languages = Configure::read('Config.languages'); 
     
    if(isset($companyProfile['CompanyProfile']['name'])){ 
      $name = $companyProfile['CompanyProfile']['name'];
    }
    else{ $name = '';}
    
    if(isset($companyProfile['CompanyProfile']['ico'])){
      $ico = $companyProfile['CompanyProfile']['ico'];
    }
    else{ $ico = '';} 
    
    if(isset($companyProfile['CompanyProfile']['web_link'])){
      $web_link = $companyProfile['CompanyProfile']['web_link'];
    }
    else{ $web_link = ''; }
    
    $i = 0;
    foreach ($languages as $language):
      if(isset($companyProfile['nameTranslation'][$i]['content'])){    
        $CompanyProfile[$language] = $companyProfile['nameTranslation'][$i]['content']; 
      } 
      else{
        $CompanyProfile[$language] = '';
      }
      $i++;   
    endforeach; 
    
    
    echo $this->Form->hidden('CompanyProfile.id', array('value' => $id));
    echo $this->Form->hidden('CompanyProfile.user_id', array('value' => 'NULL'));
		echo $this->Form->hidden('CompanyProfile.public', array('value' => 'NULL'));
    echo $this->Form->input('CompanyProfile.name', array('class' => 'input-text', 'label' => 'Company Name: ', 'size' => 50, 'value' => $name));
		echo $this->Form->input('CompanyProfile.ico', array('class' => 'input-text', 'label' => 'IČO: ', 'size' => 50, 'value' => $ico));
		echo $this->Form->input('CompanyProfile.web_link', array('class' => 'input-text', 'label' => 'Web adress (http://...): ', 'size' => 50, 'value' => $web_link));
    
    
    echo '<b>Company Profile Description: </b><br />';
		                
		$i = 0;
    foreach ($languages as $language):
      //echo $language;   
      if ($i > 0){  
        //echo'<div class="slickbox">';
        echo'<b>Company Profile Description: </b>'; echo $language. '<br />';
      }
      
      echo $this->Form->textarea('nameTranslation.'.$i.'.content', array('class' => 'input-text', 'rows' => 12, 'cols' => 39, 'value' => $CompanyProfile[$language]));
      /*
      if ($i == 0) { 
        echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
        echo '<a class="slick-toggle" href="#"> Vyplniť popis v daľších jazykoch:</a><br /><br />';
      }
      */
      if ($i > 0){ 
        //echo'</div>';
      }
      $i++;
        
    endforeach; 
		
      echo '<br /><br />'; ?>        
    <div class="left"><?php echo $this->Form->end(__('Submit'));?></div>
	</div>
</div>

