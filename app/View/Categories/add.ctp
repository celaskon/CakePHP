<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
		<legend><?php echo __('Add Main Category'); ?></legend>
	<?php
	
	  echo 'data: <br />'; print_r($data); echo '<br /><br />';
    $languages = Configure::read('Config.languages'); 
    echo 'languages: '; print_r($languages); echo'<br /><br />';
    
    $i = 0;
    foreach ($languages as $language):
        echo $language;   
		    echo $this->Form->hidden('Category.'.$i.'.category_id', array('value' => 'NULL'));
        echo $this->Form->hidden('Category.'.$i.'.locale', array('value' => $language));
        echo $this->Form->input('Category.'.$i.'.name', array('label' => 'Category Name:'));
        $i++;
    endforeach; 
    
   
  ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
