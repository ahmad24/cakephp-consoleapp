<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Cards'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="cards index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('application_number'); ?></th>
				
						<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('driver_name'); ?></th>
				
						<th><?php echo $this->Paginator->sort('counter'); ?></th>
				
						<th><?php echo $this->Paginator->sort('reciption_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('end_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('delivery_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('status_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('observations_customer'); ?></th>
				
						<th><?php echo $this->Paginator->sort('observations_reciver'); ?></th>
				
					
					
					
					
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cards as $card): ?>
	<tr>
		<td><?php echo h($card['Card']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($card['Car']['id'], array('controller' => 'cars', 'action' => 'view', $card['Car']['id'])); ?>
		</td>
		<td><?php echo h($card['Card']['application_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($card['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $card['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($card['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $card['Customer']['id'])); ?>
		</td>
		<td><?php echo h($card['Card']['driver_name']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['counter']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['reciption_time']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['delivery_time']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($card['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $card['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($card['User']['id'], array('controller' => 'users', 'action' => 'view', $card['User']['id'])); ?>
		</td>
		<td><?php echo h($card['Card']['observations_customer']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['observations_reciver']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $card['Card']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $card['Card']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $card['Card']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $card['Card']['id'])); ?>
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
