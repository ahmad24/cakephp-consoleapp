<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Acos'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="acos index">
	
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
	<?php foreach ($acos as $aco): ?>
	<tr>
		<td><?php echo h($aco['Aco']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aco['ParentAco']['id'], array('controller' => 'acos', 'action' => 'view', $aco['ParentAco']['id'])); ?>
		</td>
		<td><?php echo h($aco['Aco']['model']); ?>&nbsp;</td>
		<td><?php echo h($aco['Aco']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($aco['Aco']['alias']); ?>&nbsp;</td>
		<td><?php echo h($aco['Aco']['lft']); ?>&nbsp;</td>
		<td><?php echo h($aco['Aco']['rght']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $aco['Aco']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $aco['Aco']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $aco['Aco']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $aco['Aco']['id'])); ?>
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
