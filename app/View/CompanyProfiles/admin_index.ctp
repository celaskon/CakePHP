<div class="companyProfiles index">
	<h2><?php echo __('Company Profiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('info_id');?></th>
			<th><?php echo $this->Paginator->sort('ico');?></th>
			<th><?php echo $this->Paginator->sort('web_link');?></th>
			<th><?php echo $this->Paginator->sort('public');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($companyProfiles as $companyProfile): ?>
	<tr>
		<td><?php echo h($companyProfile['CompanyProfile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companyProfile['User']['id'], array('controller' => 'users', 'action' => 'view', $companyProfile['User']['id'])); ?>
		</td>
		<td><?php echo h($companyProfile['CompanyProfile']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companyProfile['Info']['id'], array('controller' => 'texts', 'action' => 'view', $companyProfile['Info']['id'])); ?>
		</td>
		<td><?php echo h($companyProfile['CompanyProfile']['ico']); ?>&nbsp;</td>
		<td><?php echo h($companyProfile['CompanyProfile']['web_link']); ?>&nbsp;</td>
		<td><?php echo h($companyProfile['CompanyProfile']['public']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companyProfile['CompanyProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companyProfile['CompanyProfile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companyProfile['CompanyProfile']['id']), null, __('Are you sure you want to delete # %s?', $companyProfile['CompanyProfile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company Profile'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Info'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
