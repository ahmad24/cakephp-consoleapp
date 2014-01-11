<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Maintenances'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="maintenances index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('card_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('maintenance_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('assistantid'); ?></th>
				
						<th><?php echo $this->Paginator->sort('start_date'); ?></th>
				
						<th><?php echo $this->Paginator->sort('finish_date'); ?></th>
				
						<th><?php echo $this->Paginator->sort('point'); ?></th>
				
						<th><?php echo $this->Paginator->sort('price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('estimated_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('observation'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
					
					
					
					
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($maintenances as $maintenance): ?>
	<tr>
		<td><?php echo h($maintenance['Maintenance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($maintenance['Card']['id'], array('controller' => 'cards', 'action' => 'view', $maintenance['Card']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($maintenance['MaintenanceCategorie']['name'], array('controller' => 'maintenance_categories', 'action' => 'view', $maintenance['MaintenanceCategorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($maintenance['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $maintenance['Employee']['id'])); ?>
		</td>
		<td><?php echo h($maintenance['Maintenance']['assistantid']); ?>&nbsp;</td>
		<td><?php echo h($maintenance['Maintenance']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($maintenance['Maintenance']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($maintenance['Maintenance']['point']); ?>&nbsp;</td>
		<td><?php echo h($maintenance['Maintenance']['price']); ?>&nbsp;</td>
		<td><?php echo h($maintenance['Maintenance']['estimated_time']); ?>&nbsp;</td>
		<td><?php echo h($maintenance['Maintenance']['observation']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($maintenance['User']['id'], array('controller' => 'users', 'action' => 'view', $maintenance['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $maintenance['Maintenance']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $maintenance['Maintenance']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $maintenance['Maintenance']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $maintenance['Maintenance']['id'])); ?>
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
