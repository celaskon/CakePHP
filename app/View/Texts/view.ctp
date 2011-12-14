<div class="texts view">
<h2><?php  echo __('Text');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($text['Text']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Text'), array('action' => 'edit', $text['Text']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Text'), array('action' => 'delete', $text['Text']['id']), null, __('Are you sure you want to delete # %s?', $text['Text']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Text'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Language Texts'), array('controller' => 'language_texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language Text'), array('controller' => 'language_texts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Language Texts');?></h3>
	<?php if (!empty($text['LanguageText'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Language Id'); ?></th>
		<th><?php echo __('Text Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($text['LanguageText'] as $languageText): ?>
		<tr>
			<td><?php echo $languageText['language_id'];?></td>
			<td><?php echo $languageText['text_id'];?></td>
			<td><?php echo $languageText['content'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'language_texts', 'action' => 'view', $languageText['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'language_texts', 'action' => 'edit', $languageText['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'language_texts', 'action' => 'delete', $languageText['id']), null, __('Are you sure you want to delete # %s?', $languageText['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Language Text'), array('controller' => 'language_texts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
