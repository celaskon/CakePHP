<div class="companyProfiles view">
<h2><?php  echo __('Company Profile') .' - '. ($companyProfile['CompanyProfile']['name']) ;?></h2>
	<dl>
    
    <?php print_r($companyProfile);?>
    
    <!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyProfile['CompanyProfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyProfile['User']['id'], array('controller' => 'users', 'action' => 'view', $companyProfile['User']['id'])); ?>
			&nbsp;
		</dd>     -->
		
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companyProfile['CompanyProfile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info'); ?></dt>
		<dd>
			<td><?php echo $companyProfile['CompanyProfile']['info']; ?></td>
			&nbsp;
		</dd>
		<dt><?php echo __('Ico'); ?></dt>
		<dd>
			<?php echo h($companyProfile['CompanyProfile']['ico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web Link'); ?></dt>
		<dd>
			<?php echo h($companyProfile['CompanyProfile']['web_link']); ?>
			&nbsp;
		</dd>
		
    <!--<dt><?php echo __('Public'); ?></dt>
		<dd>
			<?php echo h($companyProfile['CompanyProfile']['public']); ?>
			&nbsp;
		</dd>-->
		
		
	</dl>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Profile'), array('action' => 'edit', $companyProfile['CompanyProfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Profile'), array('action' => 'delete', $companyProfile['CompanyProfile']['id']), null, __('Are you sure you want to delete # %s?', $companyProfile['CompanyProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Profile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Info'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>


<div class="related">
	<h3><?php echo __('Related Contacts');?></h3>
	<?php if (!empty($companyProfile['Contact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<!--<th><?php echo __('Company Profile Id'); ?></th>-->
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Info Id'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($companyProfile['Contact'] as $contact): ?>
		<tr>
			<!--<td><?php echo $contact['id'];?></td>
			<td><?php echo $contact['company_profile_id'];?></td>-->
			<td><?php echo $contact['name'];?></td>
			
      
      <td><?php //echo $LT->getContent(1, $contact['info_id']);?></td><!--helper-->
			
			
      <td><?php echo $contact['phone'];?></td>
			<td><?php echo $contact['email'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


<div class="related">
	<h3><?php echo __('Related Adresses');?></h3>
	<?php if (!empty($companyProfile['Adress'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name_id'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($companyProfile['Adress'] as $adress): ?>
		<tr>
			
			<td><?php //echo $this->Text->get($adress['name_id']);?></td>
			
			<td><?php echo $adress['adress'];?></td>
			<!--<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>-->
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

				<?php //print_r($companyProfile);?>

<div class="related">
	<h3><?php echo __('Related Categories');?></h3>
			<?php //print_r($categories);?> 
    <table> 
		<?php
		$i = 0;
		foreach ($categories as $category): ?>
		<tr>
			<td>
        <?php //echo $this->Html->link(__($this->Text->get($category['ParentCategory']['name_id'])), array('controller' => 'categories', 'action' => 'view', $category['Category']['category_id']));  ?>  ->
			  <?php //echo $this->Html->link(__($this->Text->get($category['Category']['name_id'])), array('controller' => 'categories', 'action' => 'viewCompanies', $category['Category']['id']));  ?></td>
    </tr>
	<?php endforeach; ?>
	</table>
			
</div>

