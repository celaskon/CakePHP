<div class="texts index">
	<h2><?php echo __('Texts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($texts as $text): ?>
	<tr>
		<td><?php echo h($text['Text']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $text['Text']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $text['Text']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $text['Text']['id']), null, __('Are you sure you want to delete # %s?', $text['Text']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Text'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Language Texts'), array('controller' => 'language_texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language Text'), array('controller' => 'language_texts', 'action' => 'add')); ?> </li>
	</ul>
</div>
