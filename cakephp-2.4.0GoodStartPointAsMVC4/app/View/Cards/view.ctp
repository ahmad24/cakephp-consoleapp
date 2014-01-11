<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Card'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Car'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($card['Car']['id'], array('controller' => 'cars', 'action' => 'view', $card['Car']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Application Number'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['application_number']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Employee'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($card['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $card['Employee']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Customer'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($card['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $card['Customer']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Driver Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['driver_name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Counter'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['counter']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Reciption Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['reciption_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('End Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['end_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Delivery Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['delivery_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Status'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($card['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $card['Status']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($card['User']['id'], array('controller' => 'users', 'action' => 'view', $card['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Observations Customer'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['observations_customer']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Observations Reciver'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['observations_reciver']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($card['Card']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cash Recipients'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($card['CashRecipient'])): ?>
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
						<?php foreach ($card['CashRecipient'] as $cashRecipient): ?>
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
				  <h3 class="panel-title"><?php echo __('Related Maintenances'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($card['Maintenance'])): ?>
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
						<?php foreach ($card['Maintenance'] as $maintenance): ?>
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


					<?php if (!empty($card['OutService'])): ?>
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
						<?php foreach ($card['OutService'] as $outService): ?>
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
				  <h3 class="panel-title"><?php echo __('Related Stops'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($card['Stop'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Stop Time'); ?></th>
		<th><?php echo __('Resume Time'); ?></th>
		<th><?php echo __('Resone'); ?></th>
		<th><?php echo __('Observation'); ?></th>
		<th><?php echo __('Resume Observation'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($card['Stop'] as $stop): ?>
		<tr>
			<td><?php echo $stop['id']; ?></td>
			<td><?php echo $stop['card_id']; ?></td>
			<td><?php echo $stop['status_id']; ?></td>
			<td><?php echo $stop['stop_time']; ?></td>
			<td><?php echo $stop['resume_time']; ?></td>
			<td><?php echo $stop['resone']; ?></td>
			<td><?php echo $stop['observation']; ?></td>
			<td><?php echo $stop['resume_observation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'stops', 'action' => 'view', $stop['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'stops', 'action' => 'edit', $stop['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'stops', 'action' => 'delete', $stop['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $stop['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Stop'), array('controller' => 'stops', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Tests'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($card['Test'])): ?>
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
						<?php foreach ($card['Test'] as $test): ?>
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


					<?php if (!empty($card['Tool'])): ?>
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
						<?php foreach ($card['Tool'] as $tool): ?>
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
