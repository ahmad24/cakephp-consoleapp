<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Aros'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="aros index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('model'); ?></th>
				
						<th><?php echo $this->Paginator->sort('foreign_key'); ?></th>
				
						<th><?php echo $this->Paginator->sort('alias'); ?></th>
				
						<th><?php echo $this->Paginator->sort('lft'); ?></th>
				
						<th><?php echo $this->Paginator->sort('rght'); ?></th>
				
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aros as $aro): ?>
	<tr>
		<td><?php echo h($aro['Aro']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aro['ParentAro']['id'], array('controller' => 'aros', 'action' => 'view', $aro['ParentAro']['id'])); ?>
		</td>
		<td><?php echo h($aro['Aro']['model']); ?>&nbsp;</td>
		<td><?php echo h($aro['Aro']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($aro['Aro']['alias']); ?>&nbsp;</td>
		<td><?php echo h($aro['Aro']['lft']); ?>&nbsp;</td>
		<td><?php echo h($aro['Aro']['rght']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $aro['Aro']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $aro['Aro']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $aro['Aro']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $aro['Aro']['id'])); ?>
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

			</div>
		</div>
	</div>
</div>
