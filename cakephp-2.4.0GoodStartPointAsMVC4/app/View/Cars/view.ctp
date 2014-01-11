<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Car'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Chassis Number'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['chassis_number']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Motor Number'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['motor_number']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Registration Number'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['registration_number']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Customer'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $car['Customer']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Car1 Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['Car1Categorie']['name'], array('controller' => 'car1_categories', 'action' => 'view', $car['Car1Categorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Car2 Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['Car2Categorie']['name'], array('controller' => 'car2_categories', 'action' => 'view', $car['Car2Categorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Car3 Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['Car3Categorie']['name'], array('controller' => 'car3_categories', 'action' => 'view', $car['Car3Categorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Car4 Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['Car4Categorie']['name'], array('controller' => 'car4_categories', 'action' => 'view', $car['Car4Categorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Car5 Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['Car5Categorie']['name'], array('controller' => 'car5_categories', 'action' => 'view', $car['Car5Categorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Registration Date'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['registration_date']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Production Date'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['production_date']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Car Model'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['car_model']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Car Color'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['car_color']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Car Power'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['car_power']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['User']['id'], array('controller' => 'users', 'action' => 'view', $car['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($car['Car']['version']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Owner'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($car['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $car['Owner']['id'])); ?>
			&nbsp;
		
</small></h4>					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cards'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($car['Card'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Car Id'); ?></th>
		<th><?php echo __('Application Number'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Driver Name'); ?></th>
		<th><?php echo __('Counter'); ?></th>
		<th><?php echo __('Reciption Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Delivery Time'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Observations Customer'); ?></th>
		<th><?php echo __('Observations Reciver'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($car['Card'] as $card): ?>
		<tr>
			<td><?php echo $card['id']; ?></td>
			<td><?php echo $card['car_id']; ?></td>
			<td><?php echo $card['application_number']; ?></td>
			<td><?php echo $card['employee_id']; ?></td>
			<td><?php echo $card['customer_id']; ?></td>
			<td><?php echo $card['driver_name']; ?></td>
			<td><?php echo $card['counter']; ?></td>
			<td><?php echo $card['reciption_time']; ?></td>
			<td><?php echo $card['end_time']; ?></td>
			<td><?php echo $card['delivery_time']; ?></td>
			<td><?php echo $card['status_id']; ?></td>
			<td><?php echo $card['user_id']; ?></td>
			<td><?php echo $card['observations_customer']; ?></td>
			<td><?php echo $card['observations_reciver']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'cards', 'action' => 'view', $card['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'cards', 'action' => 'edit', $card['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'cards', 'action' => 'delete', $card['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $card['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		
	</div>
</div>
