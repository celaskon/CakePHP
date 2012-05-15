<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyContact');?>
	
  <h2> <?php echo __('Add Company Profile Summary: '); ?> </h2><br />
  <div class="company_register">
	<?php

    $languages = Configure::read('Config.languages'); 
    $data = $this->Session->read('CompanyProfile');

    //print_r($array); 
    echo $this->Html->image('info_icon.jpg', array('class' => 'icon', 'alt' => '', 'border' => 0, 'height' => 40));
    echo'<h3>'.  __('Basic information: ') .'</h3>';
    
    echo'<hr class="oddelovac"></hr>';
    
    echo '<b>'.__('Company Name: '). '</b>';
    echo $data[1]['CompanyProfile']['name']. '<br />';
    
    echo '<b>'.__('Company ICO: '). '</b>';
    echo $data[1]['CompanyProfile']['ico']. '<br />';
    
    echo '<b>'.__('Company web address: '). '</b>';
    echo $data[1]['CompanyProfile']['web_link']. '<br /><br />';
    
    foreach ($languages as $language):
      if ($data[1]['CompanyProfile'][$language]['info'] != '' ){    
          echo '<b>'.__('Company Profile Description: '). '</b>' . '(' .$language. ')' .'<br />';
          echo $data[1]['CompanyProfile'][$language]['info']. '<br />';
      }    
    endforeach; 
   
    
    echo'<h3>'.  __('Company Address: ') .'</h3>';
    echo'<hr class="oddelovac"></hr>';
    
    for ($j = 1; $j <= 4; $j++) {
      
      foreach ($languages as $language):
        if ($data[2]['CompanyAddress'][$j]['Adress'][$language]['name'] != '' ){    
            echo '<b>'.__('Adress Description: '). '</b>' . '(' .$language. ') ';
            echo $data[2]['CompanyAddress'][$j]['Adress'][$language]['name']. '<br />';
        }    
      endforeach;
      
      if ($data[2]['CompanyAddress'][$j]['Adress']['adress'] != '' ){    
        echo $data[2]['CompanyAddress'][$j]['Adress']['adress']. '<br />';
      }
    }   
    
    echo $this->Html->image('mail.png', array('class' => 'icon', 'alt' => '', 'border' => 0, 'height' => 40));
    echo'<h3>'.  __('Company Contact: ') .'</h3>';
    echo'<hr class="oddelovac"></hr>';
    
    for ($j = 1; $j <= 4; $j++) {
      
      if ($data[3]['CompanyContact'][$j]['Contact']['name'] != '' ){    
          echo '<b>'.__('Contact Name: '). '</b>';
          echo $data[3]['CompanyContact'][$j]['Contact']['name']. '<br />';
      }    
      if ($data[3]['CompanyContact'][$j]['Contact']['phone'] != '' ){    
          echo '<b>'.__('Phone: '). '</b>';
          echo $data[3]['CompanyContact'][$j]['Contact']['phone']. '<br />';
      }
      if ($data[3]['CompanyContact'][$j]['Contact']['email'] != '' ){    
          echo '<b>'.__('Email: '). '</b>';
          echo $data[3]['CompanyContact'][$j]['Contact']['email']. '<br /><br />';
      }
    }   
    echo'<br />';
    echo'<h3>'.  __('Company Categories: ') .'</h3>';
    echo'<hr class="oddelovac"></hr>';
    
    echo '<div class="blue">';
    foreach ($info as $key):
      if (!empty($key[1])){
        echo $key[1] .' > '; 
      }
      echo $key[2] .' > '. $key[3]. '<br />';
    
    endforeach; 
    echo '</div><br /><br />';
    
    echo $this->Form->button('<< Back', array('name' => 'data[back]', 'value' => 'back'));
    echo $this->Form->end(__('Done!'));?>

	</div>
</div>

