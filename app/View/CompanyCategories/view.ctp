<div class="companyCategories view">
<h2><?php  echo __('Company Category');?></h2>
	<dl>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyCategory['Category']['id'], array('controller' => 'categories', 'action' => 'view', $companyCategory['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Profile'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyCategory['CompanyProfile']['name'], array('controller' => 'company_profiles', 'action' => 'view', $companyCategory['CompanyProfile']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Category'), array('action' => 'edit', $companyCategory['CompanyCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Category'), array('action' => 'delete', $companyCategory['CompanyCategory']['id']), null, __('Are you sure you want to delete # %s?', $companyCategory['CompanyCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Profiles'), array('controller' => 'company_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Profile'), array('controller' => 'company_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
