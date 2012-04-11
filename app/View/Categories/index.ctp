<div class="categories_index">
	<h2><?php echo __('Main Categories');?></h2>
	<p>Zoznam kategórii na portáli:</p>
  <table cellpadding="0" cellspacing="0">
	<!--<tr>
			<th><?php //echo $this->Paginator->sort('id');?></th>   
			<th><?php //echo $this->Paginator->sort('category_id');?></th>
			<th><?php //echo $this->Paginator->sort('name_id');?></th>
			<th class="actions"><?php //echo __('Actions');?></th>
	</tr> -->  
	
  <?php
  //print_r($mainCategories);
  
  foreach ($mainCategories as $category): ?>
	<tr>
		<td>                                                      
			<?php  echo $this->Html->link(__($category['Category']['name']), array('action' => 'view', $category['Category']['id'])); // $this->Html->link(nazov linku, cesta)   ?>
    </td>
	</tr>
  <?php 
  endforeach; 
	?>
  </table>
	<p>
	
	<?php    
	     echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions: '); ?></h3>
		<?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?>
</div>
