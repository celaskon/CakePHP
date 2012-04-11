<div class="categories_index">
  <?php  echo 'Ste tu: ' .  
              $this->Html->link(__('Home') , array('action' => 'index'))
              . ' -> ' . 
              $this->Html->link(__($category['Category']['name']), array('action' => 'view', $category['Category']['id']));?>
  
  <h2>
    <?php  
    echo __('Kategória ');
    echo   $category['Category']['name'] . ': ';
      /*$foo = Configure::read('Config.languages'); 
      echo 'config:' . $foo[0]. '<br />'; 
      echo 'session:'. $this->Session->read('Config.language');  */?>
      
  </h2>
  
  <p>Zoznam podkategorii v kategorii <?php echo $category['Category']['name'];?>:</p>

  <table cellpadding="0" cellspacing="0">
  <?php
  foreach ($subCategories as $Subcategory): ?>
	<tr>                                                                                                    
		<td>                                                      
			<?php  echo $this->Html->link(__($Subcategory['Category']['name']), array('action' => 'view_subcategory_level2', $Subcategory['Category']['id'])); // $this->Html->link(nazov linku, cesta)   ?>
    </td>
	</tr>
  <?php 
  endforeach;  ?>
  </table><br /><br />

  <?php echo $this->Html->link(__('>> Hlavné kategórie'), array('action' => 'index')); ?>
  
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>                                                                                                  
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New SubCategory'), array('action' => 'add_subcategory', $category['Category']['id'])); ?> </li>
		<!--
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['category_id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
    <li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Categories'), array('controller' => 'company_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Category'), array('controller' => 'company_categories', 'action' => 'add')); ?> </li>
	  -->
  </ul>
</div>








<!--
<div class="related">
	<h3><?php echo __('Related Categories');?></h3>
	<?php if (!empty($category['ChildCategory'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Name Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['ChildCategory'] as $childCategory): ?>
		<tr>
			<td><?php echo $childCategory['id'];?></td>
			<td><?php echo $childCategory['category_id'];?></td>
			<td><?php echo $childCategory['name_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $childCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $childCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $childCategory['id']), null, __('Are you sure you want to delete # %s?', $childCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Category'), array('controller' => 'categories', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Company Categories');?></h3>
	<?php if (!empty($category['CompanyCategory'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Company Profile Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['CompanyCategory'] as $companyCategory): ?>
		<tr>
			<td><?php echo $companyCategory['category_id'];?></td>
			<td><?php echo $companyCategory['company_profile_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_categories', 'action' => 'view', $companyCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_categories', 'action' => 'edit', $companyCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_categories', 'action' => 'delete', $companyCategory['id']), null, __('Are you sure you want to delete # %s?', $companyCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Category'), array('controller' => 'company_categories', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
-->