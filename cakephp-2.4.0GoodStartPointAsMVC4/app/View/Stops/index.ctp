<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Stops'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="stops index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('card_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('status_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('stop_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('resume_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('resone'); ?></th>
				
						<th><?php echo $this->Paginator->sort('observation'); ?></th>
				
						<th><?php echo $this->Paginator->sort('resume_observation'); ?></th>
				
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($stops as $stop): ?>
	<tr>
		<td><?php echo h($stop['Stop']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stop['Card']['id'], array('controller' => 'cards', 'action' => 'view', $stop['Card']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($stop['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $stop['Status']['id'])); ?>
		</td>
		<td><?php echo h($stop['Stop']['stop_time']); ?>&nbsp;</td>
		<td><?php echo h($stop['Stop']['resume_time']); ?>&nbsp;</td>
		<td><?php echo h($stop['Stop']['resone']); ?>&nbsp;</td>
		<td><?php echo h($stop['Stop']['observation']); ?>&nbsp;</td>
		<td><?php echo h($stop['Stop']['resume_observation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $stop['Stop']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $stop['Stop']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $stop['Stop']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $stop['Stop']['id'])); ?>
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
