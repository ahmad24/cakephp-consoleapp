<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Cars'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="cars index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('chassis_number'); ?></th>
				
						<th><?php echo $this->Paginator->sort('motor_number'); ?></th>
				
						<th><?php echo $this->Paginator->sort('registration_number'); ?></th>
				
						<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car1_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car2_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car3_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car4_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car5_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('registration_date'); ?></th>
				
						<th><?php echo $this->Paginator->sort('production_date'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car_model'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car_color'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car_power'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
					
					
					
					
					
						<th><?php echo $this->Paginator->sort('owner_id'); ?></th>
				
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cars as $car): ?>
	<tr>
		<td><?php echo h($car['Car']['id']); ?>&nbsp;</td>
		<td><?php echo h($car['Car']['chassis_number']); ?>&nbsp;</td>
		<td><?php echo h($car['Car']['motor_number']); ?>&nbsp;</td>
		<td><?php echo h($car['Car']['registration_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($car['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $car['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Car1Categorie']['name'], array('controller' => 'car1_categories', 'action' => 'view', $car['Car1Categorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Car2Categorie']['name'], array('controller' => 'car2_categories', 'action' => 'view', $car['Car2Categorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Car3Categorie']['name'], array('controller' => 'car3_categories', 'action' => 'view', $car['Car3Categorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Car4Categorie']['name'], array('controller' => 'car4_categories', 'action' => 'view', $car['Car4Categorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Car5Categorie']['name'], array('controller' => 'car5_categories', 'action' => 'view', $car['Car5Categorie']['id'])); ?>
		</td>
		<td><?php echo h($car['Car']['registration_date']); ?>&nbsp;</td>
		<td><?php echo h($car['Car']['production_date']); ?>&nbsp;</td>
		<td><?php echo h($car['Car']['car_model']); ?>&nbsp;</td>
		<td><?php echo h($car['Car']['car_color']); ?>&nbsp;</td>
		<td><?php echo h($car['Car']['car_power']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($car['User']['id'], array('controller' => 'users', 'action' => 'view', $car['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $car['Owner']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $car['Car']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $car['Car']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $car['Car']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car['Car']['id'])); ?>
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
