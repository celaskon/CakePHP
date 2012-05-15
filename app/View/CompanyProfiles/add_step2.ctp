
<?php //echo $this->Html->script('show-hide'); ?>


<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyAddress');?>
	
  <h2> <?php echo __('Add Company Profile Step 2/4: '); ?> </h2><br />
  <?php echo $this->Html->image('step2.png', array('alt' => 'step2', 'border' => 0));?>
  <div class="company_register">
    <h3>Company adress:</h3>
	<?php

    $languages = Configure::read('Config.languages'); 

    $session_data = $this->Session->read('CompanyProfile');
		//print_r($session_data);
    //echo 'data: <br />'; print_r($data); echo '<br /><br />';
    //echo 'languages: '; print_r($languages); echo'<br /><br />';
    
    
    
    /*$i = 0;
    foreach ($languages as $language):
        //echo $language;   
        if ($i > 0){  echo'<div id="slickbox" style="display: block;">';}
        echo $this->Form->input('Adress.'.$i.'.name',
                                array('class' => 'input-text',
                                      'label' => 'Popis Adresy (Pobočka/Centrála): ('.$language.'): ',
                                      'size' => 50));
        if ($i == 0) { 
          //echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
          //echo '<a id="slick-toggle" href="#"> Vyplniť popis v daľších jazykoch:</a><br /><br />';
        }
        if ($i > 0){ echo'</div>';}
        $i++;
    endforeach; 
    
    
		echo $this->Form->input('Adress.name', array('class' => 'input-text', 'label' => 'Company Adress: ', 'rows' => 4, 'cols' => 39));
    */
    
    for ($j = 1; $j <= 4; $j++) { // ak je nastavena session -> nastavi posty pre vsetky inputy
  
      $i = 0;
      foreach ($languages as $language): 
        
        if(isset($session_data[2]['CompanyAddress'][$j]['Adress'][$language]['name'])){ 
          $CompanyAddress[$j][$language]['name'] = $session_data[2]['CompanyAddress'][$j]['Adress'][$language]['name'];
        }
        else{ 
          $CompanyAddress[$j][$language]['name'] = '';
        }
        $i++;
      endforeach;
      
      
      if(isset($session_data[2]['CompanyAddress'][$j]['Adress'][$language]['name'])){ 
        $adress[$j] = $session_data[2]['CompanyAddress'][$j]['Adress']['adress'];
      }
      else{ 
        $adress[$j] = '';
      }  
    }



    for ($j = 1; $j <= 4; $j++) {  //formular
  
      $i = 0;
      foreach ($languages as $language):
        //echo $language;   
        if ($i > 0){ 
          //echo'<div id="slickbox" style="display: block;">';
        }
        
        echo $this->Form->input($j.'.Adress.'.$language.'.name',
                                array('class' => 'input-text',
                                      'label' => 'Popis Adresy (Pobočka/Centrála): ('.$language.'): ',
                                      'size' => 50,
                                      'value' =>  $CompanyAddress[$j][$language]['name']));
        if ($i == 0) { 
          //echo $this->Html->image('arrow_green.png', array('class' => 'arrow', 'alt' => 'other_language', 'border' => 0, 'height' => 16));
          //echo '<a id="slick-toggle" href="#"> Vyplniť popis v daľších jazykoch:</a><br /><br />';
        }
        
        if ($i > 0){ 
          //echo'</div>';
        }
        
        $i++;
      endforeach; 
      
      
  		echo $this->Form->input($j.'.Adress.adress', array('class' => 'input-text',
                                                         'label' => 'Company Adress: ',
                                                         'rows' => 4,
                                                         'cols' => 39,
                                                         'value' => $adress[$j]));
      echo'<br /><br /><br />';
    }

	//echo '<a class="dalsiejazyky"  href="#">Pridať dalsie adresy: </a><br /><br />';


  echo $this->Form->button('<< Back', array('name' => 'data[back]', 'value' => 'back'));
  echo $this->Form->end(__('Next >>'));?>

	</div>
</div>

