<div class="companyCategories form">
<?php echo $this->Form->create('CompanyCategory');?>
	<fieldset>
		<legend><?php echo __('Edit Company Category'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('company_profile_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompanyCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompanyCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Company Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Profiles'), array('controller' => 'company_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Profile'), array('controller' => 'company_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
