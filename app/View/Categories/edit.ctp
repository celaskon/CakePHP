<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
		<legend><?php echo __('Edit Category'); ?></legend>
	<?php
	  
	  echo 'data: <br />'; print_r($data); echo '<br /><br />';
	  
    $languages = Configure::read('Config.languages');
    print_r($languages); echo '<br /><br />';
    
    
    echo $this->Form->hidden('Category.id', array('value' => $id));
    echo $this->Form->hidden('Category.category_id', array('value' => 'NULL'));
    
    $i = 0;
    foreach ($languages as $language): 
    
        echo $language;   
        //		echo $this->Form->input('Category.name', array('label' => 'Category Name:'));  
    		echo $this->Form->hidden('nameTranslation.'.$i.'.id', array('value' => $this->request->data['nameTranslation'][$i]['id'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.locale', array('value' => $this->request->data['nameTranslation'][$i]['locale'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.model', array('value' => $this->request->data['nameTranslation'][$i]['model'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.foreign_key', array('value' => $this->request->data['nameTranslation'][$i]['foreign_key'])); 
    		echo $this->Form->hidden('nameTranslation.'.$i.'.field', array('value' => $this->request->data['nameTranslation'][$i]['field'])); 
    		echo $this->Form->input('nameTranslation.'.$i.'.content', array('label' => 'Category Name:')); 
        $i++; 
         
    endforeach; 
    
    
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Categories'), array('controller' => 'company_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Category'), array('controller' => 'company_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
