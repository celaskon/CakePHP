<div class="companyProfiles form">
<?php echo $this->Form->create('CompanyProfile');?>
	<fieldset>
		<legend><?php echo __('Add Company Profile'); ?></legend>
	<?php
		
    
    $languages = Configure::read('Config.languages'); 

    //echo $this->Form->input('user_id');
		echo $this->Form->input('CompanyProfile.name', array('label' => 'Company Name: '));
		
    echo '<b>Company Profile Description: </b><br />';
    echo $this->Form->textarea('CompanyProfile.info', array('rows' => 6, 'cols' => 40));
		echo $this->Form->input('CompanyProfile.ico', array('label' => 'IČO: '));
		echo $this->Form->input('CompanyProfile.web_link', array('label' => 'Web adress: '));
		echo $this->Form->input('CompanyProfile.public');    
    
    
    echo '<b>Zaradenie do kategorii: </b><br /><br />';
    
    foreach ($Categories as $Category): 
       
        if ($Category['Category']['category_id'] == 0){
            echo '<b>'.$Category['Category']['name'].':'.'</b><br /><br />';
          
            foreach ($Categories as $SubCategory): 
                if ($Category['Category']['id'] == $SubCategory['Category']['category_id']){
                    echo $SubCategory['Category']['name'];
                    echo $this->Form->checkbox('Category.category_id', array('hiddenField' => false, 
                                                                             'label'=> $SubCategory['Category']['name'], 
                                                                             'value' => $SubCategory['Category']['id']));
                    echo '<br />';
                }
            endforeach; 
            echo '<br /><br />';
        }
    endforeach; 
    
          
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>




<!-- 
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Company Profiles'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Info'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->