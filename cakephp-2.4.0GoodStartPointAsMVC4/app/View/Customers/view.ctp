<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Customer'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Driver Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['driver_name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Customer Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($customer['CustomerCategorie']['name'], array('controller' => 'customer_categories', 'action' => 'view', $customer['CustomerCategorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Address'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['address']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Telephone'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['telephone']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Cellphone'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['cellphone']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Contact1'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['contact1']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Contact2'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['contact2']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Birthdate'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['birthdate']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Identity'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['identity']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($customer['User']['id'], array('controller' => 'users', 'action' => 'view', $customer['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($customer['Customer']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cards'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($customer['Card'])): ?>
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
						<?php foreach ($customer['Card'] as $card): ?>
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
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cars'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($customer['Car'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Chassis Number'); ?></th>
		<th><?php echo __('Motor Number'); ?></th>
		<th><?php echo __('Registration Number'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Car1 Categorie Id'); ?></th>
		<th><?php echo __('Car2 Categorie Id'); ?></th>
		<th><?php echo __('Car3 Categorie Id'); ?></th>
		<th><?php echo __('Car4 Categorie Id'); ?></th>
		<th><?php echo __('Car5 Categorie Id'); ?></th>
		<th><?php echo __('Registration Date'); ?></th>
		<th><?php echo __('Production Date'); ?></th>
		<th><?php echo __('Car Model'); ?></th>
		<th><?php echo __('Car Color'); ?></th>
		<th><?php echo __('Car Power'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($customer['Car'] as $car): ?>
		<tr>
			<td><?php echo $car['id']; ?></td>
			<td><?php echo $car['chassis_number']; ?></td>
			<td><?php echo $car['motor_number']; ?></td>
			<td><?php echo $car['registration_number']; ?></td>
			<td><?php echo $car['customer_id']; ?></td>
			<td><?php echo $car['car1_categorie_id']; ?></td>
			<td><?php echo $car['car2_categorie_id']; ?></td>
			<td><?php echo $car['car3_categorie_id']; ?></td>
			<td><?php echo $car['car4_categorie_id']; ?></td>
			<td><?php echo $car['car5_categorie_id']; ?></td>
			<td><?php echo $car['registration_date']; ?></td>
			<td><?php echo $car['production_date']; ?></td>
			<td><?php echo $car['car_model']; ?></td>
			<td><?php echo $car['car_color']; ?></td>
			<td><?php echo $car['car_power']; ?></td>
			<td><?php echo $car['user_id']; ?></td>
			<td><?php echo $car['owner_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'cars', 'action' => 'view', $car['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'cars', 'action' => 'edit', $car['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'cars', 'action' => 'delete', $car['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Car'), array('controller' => 'cars', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		
	</div>
</div>
