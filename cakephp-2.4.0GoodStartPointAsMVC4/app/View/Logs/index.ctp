<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Logs'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="logs index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('log_category_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message1'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message2'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message3'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message4'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message5'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message6'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message7'); ?></th>
				
						<th><?php echo $this->Paginator->sort('message8'); ?></th>
				
					
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($logs as $log): ?>
	<tr>
		<td><?php echo h($log['Log']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($log['LogCategory']['name'], array('controller' => 'log_categories', 'action' => 'view', $log['LogCategory']['id'])); ?>
		</td>
		<td><?php echo h($log['Log']['message1']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['message2']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['message3']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['message4']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['message5']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['message6']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['message7']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['message8']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $log['Log']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $log['Log']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $log['Log']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $log['Log']['id'])); ?>
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
