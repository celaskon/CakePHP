<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
		<legend><?php echo __('Admin Add Category'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('name_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Profiles'), array('controller' => 'company_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Profile'), array('controller' => 'company_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
