<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
		<legend><?php echo __('Edit SubCategory'); ?></legend>
	<?php
	  
    $languages = Configure::read('Config.languages');
    
    echo $this->Form->hidden('Category.id', array('value' => $id));
    //echo $this->Form->hidden('Category.category_id', array('value' => 'NULL'));
    
    //print_r($Categories);
    
    foreach ($Categories as $Category): 
      $options[$Category['Category']['id']] = $Category['Category']['name'];
    endforeach; 
    
    
    $attributes = array('class' => 'input-text', 'empty' => 'Main Category');
    echo 'Choose Category: <br />';
    echo $this->Form->select('Category.category_id', $options, $attributes);
    echo '<br /><br />';
    
    
    $i = 0;
    foreach ($languages as $language): 
    
        echo $language;   
        //		echo $this->Form->input('Category.name', array('label' => 'Category Name:'));  
    		echo $this->Form->hidden('nameTranslation.'.$i.'.id', array('value' => $this->request->data['nameTranslation'][$i]['id'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.locale', array('value' => $this->request->data['nameTranslation'][$i]['locale'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.model', array('value' => $this->request->data['nameTranslation'][$i]['model'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.foreign_key', array('value' => $this->request->data['nameTranslation'][$i]['foreign_key'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.field', array('value' => $this->request->data['nameTranslation'][$i]['field'])); 
    		echo $this->Form->input('nameTranslation.'.$i.'.content', array('class' => 'input-text', 'label' => 'Category Name:')); 
        $i++; 
         
    endforeach; 
    
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

