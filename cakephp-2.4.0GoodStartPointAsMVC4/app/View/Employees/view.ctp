<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Employee'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Employee Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($employee['EmployeeCategorie']['name'], array('controller' => 'employee_categories', 'action' => 'view', $employee['EmployeeCategorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Address'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['address']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Telephone'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['telephone']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Cellphone'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['cellphone']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Birthdate'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['birthdate']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Employment'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['employment']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Identity'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['identity']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($employee['User']['id'], array('controller' => 'users', 'action' => 'view', $employee['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($employee['Employee']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cards'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($employee['Card'])): ?>
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
						<?php foreach ($employee['Card'] as $card): ?>
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
				  <h3 class="panel-title"><?php echo __('Related Maintenances'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($employee['Maintenance'])): ?>
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
						<?php foreach ($employee['Maintenance'] as $maintenance): ?>
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
				  <h3 class="panel-title"><?php echo __('Related Tests'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($employee['Test'])): ?>
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
						<?php foreach ($employee['Test'] as $test): ?>
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
		
	</div>
</div>
