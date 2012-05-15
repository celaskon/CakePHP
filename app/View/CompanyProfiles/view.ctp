
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Profile'), array('action' => 'editProfile', $companyProfile['CompanyProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Company Addreses'), array('action' => 'editAddress', $companyProfile['CompanyProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Company Contacts'), array('action' => 'editContact', $companyProfile['CompanyProfile']['id'])); ?> </li>
    <li><?php echo $this->Form->postLink(__('Delete Company Profile'), array('action' => 'delete', $companyProfile['CompanyProfile']['id']), null, __('Are you sure you want to delete # %s?', $companyProfile['CompanyProfile']['id'])); ?> </li>
	</ul>
</div>
    
<div class="companyProfiles_view">
   
   <?php 
    echo '<br />';
    echo $this->Html->image('info_icon.jpg', array('class' => 'icon', 'alt' => '', 'border' => 0, 'height' => 40));
    echo'<h2 class="blue">'. ($companyProfile['CompanyProfile']['name']) .'</h2>';
    echo'<hr class="oddelovac"></hr>';
   
    echo '<b>'.__('Company ICO: '). '</b>';
    echo $companyProfile['CompanyProfile']['ico']. '<br />';
    
    echo '<b>'.__('Company web address: '). '</b>';
    echo $this->Html->link($companyProfile['CompanyProfile']['web_link'], $companyProfile['CompanyProfile']['web_link']).'<br /><br />';
    
    echo '<b>'.__('Company Profile Description: '). '</b><br />';
    echo $companyProfile['CompanyProfile']['info']. '<br />';
    
    
    
    echo'<h3>'.  __('Company Contact: ') .'</h3>';
    echo'<hr class="oddelovac"></hr>';
    
		foreach ($companyProfile['Contact'] as $contact):
      echo '<b>'. $contact['name'].'</b><br />';
      echo '<span class="info">'.$contact['phone'].'</span><br />'; 
      echo '<span class="info">'.$contact['email'].'</span><br />';
      echo '<br />';
    endforeach; 
  



    echo $this->Html->image('mail.png', array('class' => 'icon', 'alt' => '', 'border' => 0, 'height' => 40));
    echo'<h3>'.  __('Company Adress: ') .'</h3>';
    echo'<hr class="oddelovac"></hr>';

    
		$i = 0;
		foreach ($companyProfile['Adress'] as $adress): 
      //echo $adress['info'];
      echo $adress['adress'];
    endforeach; 
        
    ?>
    
    <?//php print_r($companyProfile);?>
    
    <div class="related">
    	<h3><?php echo __('Related Categories');?></h3>
    			<?php echo'<hr class="oddelovac"></hr>';
          //print_r($categories);?> 
    		<?php
    		$i = 0;
    		echo '<div class="blue">';
        foreach ($info as $key):
          if (!empty($key[1])){
            echo $key[1] .' > '; 
          }
          echo $key[2] .' > '. $key[3]. '<br />';
        
        endforeach; 
        echo '</div><br /><br />';?>
    </div>
  
</div>

