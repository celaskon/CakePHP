<div class="categories view">
<h2><?php  echo __('Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['ParentCategory']['id'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['Name']['id'], array('controller' => 'texts', 'action' => 'view', $category['Name']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Profiles'), array('controller' => 'company_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Profile'), array('controller' => 'company_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
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
	<h3><?php echo __('Related Company Profiles');?></h3>
	<?php if (!empty($category['CompanyProfile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Info Id'); ?></th>
		<th><?php echo __('Ico'); ?></th>
		<th><?php echo __('Web Link'); ?></th>
		<th><?php echo __('Public'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['CompanyProfile'] as $companyProfile): ?>
		<tr>
			<td><?php echo $companyProfile['id'];?></td>
			<td><?php echo $companyProfile['user_id'];?></td>
			<td><?php echo $companyProfile['name'];?></td>
			<td><?php echo $companyProfile['info_id'];?></td>
			<td><?php echo $companyProfile['ico'];?></td>
			<td><?php echo $companyProfile['web_link'];?></td>
			<td><?php echo $companyProfile['public'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_profiles', 'action' => 'view', $companyProfile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_profiles', 'action' => 'edit', $companyProfile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_profiles', 'action' => 'delete', $companyProfile['id']), null, __('Are you sure you want to delete # %s?', $companyProfile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Profile'), array('controller' => 'company_profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
