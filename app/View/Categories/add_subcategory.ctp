<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
		<legend><?php echo __('Add SubCategory'); ?></legend>
    <p>Pridať podkategoriu do kategorie <?php echo $category['Category']['name'];?>:</p>
<?php
	
    $languages = Configure::read('Config.languages'); 
    
    $i = 0;
    foreach ($languages as $language):
        echo $language;   
		    echo $this->Form->hidden('Category.'.$i.'.category_id', array('value' => $category['Category']['id']));
        echo $this->Form->hidden('Category.'.$i.'.locale', array('value' => $language));
        echo $this->Form->input('Category.'.$i.'.name', array('label' => 'Category Name:'));
        $i++;
    endforeach; 
    
   
  ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
