<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('User'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Username'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Password'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Email'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Role'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Birthday'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['birthday']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($user['User']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Car1 Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Car1Category'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Car1Category'] as $car1Category): ?>
		<tr>
			<td><?php echo $car1Category['id']; ?></td>
			<td><?php echo $car1Category['name']; ?></td>
			<td><?php echo $car1Category['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'car1_categories', 'action' => 'view', $car1Category['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'car1_categories', 'action' => 'edit', $car1Category['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'car1_categories', 'action' => 'delete', $car1Category['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car1Category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Car1 Category'), array('controller' => 'car1_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Car2 Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Car2Category'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Car1 Categorie Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Car2Category'] as $car2Category): ?>
		<tr>
			<td><?php echo $car2Category['id']; ?></td>
			<td><?php echo $car2Category['name']; ?></td>
			<td><?php echo $car2Category['car1_categorie_id']; ?></td>
			<td><?php echo $car2Category['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'car2_categories', 'action' => 'view', $car2Category['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'car2_categories', 'action' => 'edit', $car2Category['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'car2_categories', 'action' => 'delete', $car2Category['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car2Category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Car2 Category'), array('controller' => 'car2_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Car3 Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Car3Category'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Car3Category'] as $car3Category): ?>
		<tr>
			<td><?php echo $car3Category['id']; ?></td>
			<td><?php echo $car3Category['name']; ?></td>
			<td><?php echo $car3Category['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'car3_categories', 'action' => 'view', $car3Category['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'car3_categories', 'action' => 'edit', $car3Category['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'car3_categories', 'action' => 'delete', $car3Category['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car3Category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Car3 Category'), array('controller' => 'car3_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Car4 Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Car4Category'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Car4Category'] as $car4Category): ?>
		<tr>
			<td><?php echo $car4Category['id']; ?></td>
			<td><?php echo $car4Category['name']; ?></td>
			<td><?php echo $car4Category['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'car4_categories', 'action' => 'view', $car4Category['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'car4_categories', 'action' => 'edit', $car4Category['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'car4_categories', 'action' => 'delete', $car4Category['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car4Category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Car4 Category'), array('controller' => 'car4_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Car5 Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Car5Category'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Car5Category'] as $car5Category): ?>
		<tr>
			<td><?php echo $car5Category['id']; ?></td>
			<td><?php echo $car5Category['name']; ?></td>
			<td><?php echo $car5Category['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'car5_categories', 'action' => 'view', $car5Category['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'car5_categories', 'action' => 'edit', $car5Category['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'car5_categories', 'action' => 'delete', $car5Category['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car5Category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Car5 Category'), array('controller' => 'car5_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cards'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Card'])): ?>
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
						<?php foreach ($user['Card'] as $card): ?>
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


					<?php if (!empty($user['Car'])): ?>
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
						<?php foreach ($user['Car'] as $car): ?>
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
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cash Recipients'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['CashRecipient'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Total Price'); ?></th>
		<th><?php echo __('Check Id'); ?></th>
		<th><?php echo __('Receivable'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Test Price'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Maint Price'); ?></th>
		<th><?php echo __('Tool Price'); ?></th>
		<th><?php echo __('Out Service Price'); ?></th>
		<th><?php echo __('Discount Rate'); ?></th>
		<th><?php echo __('Discount Amount'); ?></th>
		<th><?php echo __('In Cash'); ?></th>
		<th><?php echo __('Check'); ?></th>
		<th><?php echo __('Observation'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['CashRecipient'] as $cashRecipient): ?>
		<tr>
			<td><?php echo $cashRecipient['id']; ?></td>
			<td><?php echo $cashRecipient['card_id']; ?></td>
			<td><?php echo $cashRecipient['total_price']; ?></td>
			<td><?php echo $cashRecipient['check_id']; ?></td>
			<td><?php echo $cashRecipient['receivable']; ?></td>
			<td><?php echo $cashRecipient['user_id']; ?></td>
			<td><?php echo $cashRecipient['test_price']; ?></td>
			<td><?php echo $cashRecipient['end_time']; ?></td>
			<td><?php echo $cashRecipient['maint_price']; ?></td>
			<td><?php echo $cashRecipient['tool_price']; ?></td>
			<td><?php echo $cashRecipient['out_service_price']; ?></td>
			<td><?php echo $cashRecipient['discount_rate']; ?></td>
			<td><?php echo $cashRecipient['discount_amount']; ?></td>
			<td><?php echo $cashRecipient['in_cash']; ?></td>
			<td><?php echo $cashRecipient['check']; ?></td>
			<td><?php echo $cashRecipient['observation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'cash_recipients', 'action' => 'view', $cashRecipient['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'cash_recipients', 'action' => 'edit', $cashRecipient['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'cash_recipients', 'action' => 'delete', $cashRecipient['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $cashRecipient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Cash Recipient'), array('controller' => 'cash_recipients', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Checks'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Check'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Bank Name'); ?></th>
		<th><?php echo __('Bank Branch'); ?></th>
		<th><?php echo __('Maturity Date'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Check'] as $check): ?>
		<tr>
			<td><?php echo $check['id']; ?></td>
			<td><?php echo $check['number']; ?></td>
			<td><?php echo $check['amount']; ?></td>
			<td><?php echo $check['bank_name']; ?></td>
			<td><?php echo $check['bank_branch']; ?></td>
			<td><?php echo $check['maturity_date']; ?></td>
			<td><?php echo $check['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'checks', 'action' => 'view', $check['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'checks', 'action' => 'edit', $check['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'checks', 'action' => 'delete', $check['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $check['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Check'), array('controller' => 'checks', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Customers'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Customer'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Driver Name'); ?></th>
		<th><?php echo __('Customer Categorie Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Cellphone'); ?></th>
		<th><?php echo __('Contact1'); ?></th>
		<th><?php echo __('Contact2'); ?></th>
		<th><?php echo __('Birthdate'); ?></th>
		<th><?php echo __('Identity'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['driver_name']; ?></td>
			<td><?php echo $customer['customer_categorie_id']; ?></td>
			<td><?php echo $customer['address']; ?></td>
			<td><?php echo $customer['telephone']; ?></td>
			<td><?php echo $customer['cellphone']; ?></td>
			<td><?php echo $customer['contact1']; ?></td>
			<td><?php echo $customer['contact2']; ?></td>
			<td><?php echo $customer['birthdate']; ?></td>
			<td><?php echo $customer['identity']; ?></td>
			<td><?php echo $customer['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'customers', 'action' => 'view', $customer['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'customers', 'action' => 'edit', $customer['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'customers', 'action' => 'delete', $customer['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Employee Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['EmployeeCategory'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['EmployeeCategory'] as $employeeCategory): ?>
		<tr>
			<td><?php echo $employeeCategory['id']; ?></td>
			<td><?php echo $employeeCategory['name']; ?></td>
			<td><?php echo $employeeCategory['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'employee_categories', 'action' => 'view', $employeeCategory['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'employee_categories', 'action' => 'edit', $employeeCategory['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'employee_categories', 'action' => 'delete', $employeeCategory['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $employeeCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Employee Category'), array('controller' => 'employee_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Employees'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Employee'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Employee Categorie Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Cellphone'); ?></th>
		<th><?php echo __('Birthdate'); ?></th>
		<th><?php echo __('Employment'); ?></th>
		<th><?php echo __('Identity'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['name']; ?></td>
			<td><?php echo $employee['employee_categorie_id']; ?></td>
			<td><?php echo $employee['address']; ?></td>
			<td><?php echo $employee['telephone']; ?></td>
			<td><?php echo $employee['cellphone']; ?></td>
			<td><?php echo $employee['birthdate']; ?></td>
			<td><?php echo $employee['employment']; ?></td>
			<td><?php echo $employee['identity']; ?></td>
			<td><?php echo $employee['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'employees', 'action' => 'view', $employee['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'employees', 'action' => 'edit', $employee['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'employees', 'action' => 'delete', $employee['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Maintenance Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['MaintenanceCategory'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Point'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Estimated Time'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['MaintenanceCategory'] as $maintenanceCategory): ?>
		<tr>
			<td><?php echo $maintenanceCategory['id']; ?></td>
			<td><?php echo $maintenanceCategory['name']; ?></td>
			<td><?php echo $maintenanceCategory['point']; ?></td>
			<td><?php echo $maintenanceCategory['price']; ?></td>
			<td><?php echo $maintenanceCategory['estimated_time']; ?></td>
			<td><?php echo $maintenanceCategory['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'maintenance_categories', 'action' => 'view', $maintenanceCategory['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'maintenance_categories', 'action' => 'edit', $maintenanceCategory['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'maintenance_categories', 'action' => 'delete', $maintenanceCategory['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $maintenanceCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Maintenance Category'), array('controller' => 'maintenance_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Maintenances'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Maintenance'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Maintenance Categorie Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Assistantid'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Finish Date'); ?></th>
		<th><?php echo __('Point'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Estimated Time'); ?></th>
		<th><?php echo __('Observation'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Maintenance'] as $maintenance): ?>
		<tr>
			<td><?php echo $maintenance['id']; ?></td>
			<td><?php echo $maintenance['card_id']; ?></td>
			<td><?php echo $maintenance['maintenance_categorie_id']; ?></td>
			<td><?php echo $maintenance['employee_id']; ?></td>
			<td><?php echo $maintenance['assistantid']; ?></td>
			<td><?php echo $maintenance['start_date']; ?></td>
			<td><?php echo $maintenance['finish_date']; ?></td>
			<td><?php echo $maintenance['point']; ?></td>
			<td><?php echo $maintenance['price']; ?></td>
			<td><?php echo $maintenance['estimated_time']; ?></td>
			<td><?php echo $maintenance['observation']; ?></td>
			<td><?php echo $maintenance['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'maintenances', 'action' => 'view', $maintenance['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'maintenances', 'action' => 'edit', $maintenance['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'maintenances', 'action' => 'delete', $maintenance['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $maintenance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Maintenance'), array('controller' => 'maintenances', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Out Services'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['OutService'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Supplier Name'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Observation'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Outservice Supplier Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['OutService'] as $outService): ?>
		<tr>
			<td><?php echo $outService['id']; ?></td>
			<td><?php echo $outService['name']; ?></td>
			<td><?php echo $outService['card_id']; ?></td>
			<td><?php echo $outService['supplier_name']; ?></td>
			<td><?php echo $outService['price']; ?></td>
			<td><?php echo $outService['count']; ?></td>
			<td><?php echo $outService['observation']; ?></td>
			<td><?php echo $outService['user_id']; ?></td>
			<td><?php echo $outService['outservice_supplier_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'out_services', 'action' => 'view', $outService['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'out_services', 'action' => 'edit', $outService['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'out_services', 'action' => 'delete', $outService['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $outService['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Out Service'), array('controller' => 'out_services', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Outservice Suppliers'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['OutserviceSupplier'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['OutserviceSupplier'] as $outserviceSupplier): ?>
		<tr>
			<td><?php echo $outserviceSupplier['id']; ?></td>
			<td><?php echo $outserviceSupplier['name']; ?></td>
			<td><?php echo $outserviceSupplier['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'outservice_suppliers', 'action' => 'view', $outserviceSupplier['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'outservice_suppliers', 'action' => 'edit', $outserviceSupplier['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'outservice_suppliers', 'action' => 'delete', $outserviceSupplier['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $outserviceSupplier['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Outservice Supplier'), array('controller' => 'outservice_suppliers', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Posts'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Post'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['body']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'posts', 'action' => 'view', $post['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'posts', 'action' => 'edit', $post['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'posts', 'action' => 'delete', $post['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Suppliers'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Supplier'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Supplier'] as $supplier): ?>
		<tr>
			<td><?php echo $supplier['id']; ?></td>
			<td><?php echo $supplier['name']; ?></td>
			<td><?php echo $supplier['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'suppliers', 'action' => 'view', $supplier['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'suppliers', 'action' => 'edit', $supplier['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'suppliers', 'action' => 'delete', $supplier['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $supplier['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Test Categories'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['TestCategory'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Estimated Time'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['TestCategory'] as $testCategory): ?>
		<tr>
			<td><?php echo $testCategory['id']; ?></td>
			<td><?php echo $testCategory['name']; ?></td>
			<td><?php echo $testCategory['user_id']; ?></td>
			<td><?php echo $testCategory['price']; ?></td>
			<td><?php echo $testCategory['estimated_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'test_categories', 'action' => 'view', $testCategory['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'test_categories', 'action' => 'edit', $testCategory['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'test_categories', 'action' => 'delete', $testCategory['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $testCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Test Category'), array('controller' => 'test_categories', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Tests'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Test'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Test Categorie Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Estimated Time'); ?></th>
		<th><?php echo __('Observation'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Test'] as $test): ?>
		<tr>
			<td><?php echo $test['id']; ?></td>
			<td><?php echo $test['card_id']; ?></td>
			<td><?php echo $test['test_categorie_id']; ?></td>
			<td><?php echo $test['employee_id']; ?></td>
			<td><?php echo $test['price']; ?></td>
			<td><?php echo $test['estimated_time']; ?></td>
			<td><?php echo $test['observation']; ?></td>
			<td><?php echo $test['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'tests', 'action' => 'view', $test['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'tests', 'action' => 'edit', $test['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'tests', 'action' => 'delete', $test['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $test['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Tools'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($user['Tool'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Supplier Id'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Observation'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($user['Tool'] as $tool): ?>
		<tr>
			<td><?php echo $tool['id']; ?></td>
			<td><?php echo $tool['name']; ?></td>
			<td><?php echo $tool['card_id']; ?></td>
			<td><?php echo $tool['supplier_id']; ?></td>
			<td><?php echo $tool['count']; ?></td>
			<td><?php echo $tool['price']; ?></td>
			<td><?php echo $tool['observation']; ?></td>
			<td><?php echo $tool['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'tools', 'action' => 'view', $tool['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'tools', 'action' => 'edit', $tool['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'tools', 'action' => 'delete', $tool['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $tool['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Tool'), array('controller' => 'tools', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		
	</div>
</div>
