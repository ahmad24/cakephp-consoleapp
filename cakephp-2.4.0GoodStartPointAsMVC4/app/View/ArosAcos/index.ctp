<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Aros Acos'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="arosAcos index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('aro_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('aco_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('_create'); ?></th>
				
						<th><?php echo $this->Paginator->sort('_read'); ?></th>
				
						<th><?php echo $this->Paginator->sort('_update'); ?></th>
				
						<th><?php echo $this->Paginator->sort('_delete'); ?></th>
				
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($arosAcos as $arosAco): ?>
	<tr>
		<td><?php echo h($arosAco['ArosAco']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($arosAco['Aro']['id'], array('controller' => 'aros', 'action' => 'view', $arosAco['Aro']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($arosAco['Aco']['id'], array('controller' => 'acos', 'action' => 'view', $arosAco['Aco']['id'])); ?>
		</td>
		<td><?php echo h($arosAco['ArosAco']['_create']); ?>&nbsp;</td>
		<td><?php echo h($arosAco['ArosAco']['_read']); ?>&nbsp;</td>
		<td><?php echo h($arosAco['ArosAco']['_update']); ?>&nbsp;</td>
		<td><?php echo h($arosAco['ArosAco']['_delete']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $arosAco['ArosAco']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $arosAco['ArosAco']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $arosAco['ArosAco']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $arosAco['ArosAco']['id'])); ?>
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
