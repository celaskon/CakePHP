<div class="texts form">
<?php echo $this->Form->create('Text');?>
	<fieldset>
		<legend><?php echo __('Add Text'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Texts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Language Texts'), array('controller' => 'language_texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language Text'), array('controller' => 'language_texts', 'action' => 'add')); ?> </li>
	</ul>
</div>
