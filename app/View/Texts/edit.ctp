<div class="texts form">
<?php echo $this->Form->create('Text');?>
	<fieldset>
		<legend><?php echo __('Edit Text'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Text.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Text.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Texts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Language Texts'), array('controller' => 'language_texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language Text'), array('controller' => 'language_texts', 'action' => 'add')); ?> </li>
	</ul>
</div>
