<div class="companyCategories index">
	<h2><?php echo __('Company Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('category_id');?></th>
			<th><?php echo $this->Paginator->sort('company_profile_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($companyCategories as $companyCategory): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($companyCategory['Category']['id'], array('controller' => 'categories', 'action' => 'view', $companyCategory['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($companyCategory['CompanyProfile']['name'], array('controller' => 'company_profiles', 'action' => 'view', $companyCategory['CompanyProfile']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companyCategory['CompanyCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companyCategory['CompanyCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companyCategory['CompanyCategory']['id']), null, __('Are you sure you want to delete # %s?', $companyCategory['CompanyCategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Company Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Profiles'), array('controller' => 'company_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Profile'), array('controller' => 'company_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
