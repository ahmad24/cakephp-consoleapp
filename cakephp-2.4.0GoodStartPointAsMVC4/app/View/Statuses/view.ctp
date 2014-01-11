<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Status'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($status['Status']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($status['Status']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($status['Status']['date_deleted']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cards'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($status['Card'])): ?>
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
						<?php foreach ($status['Card'] as $card): ?>
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
				  <h3 class="panel-title"><?php echo __('Related Stops'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($status['Stop'])): ?>
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
						<?php foreach ($status['Stop'] as $stop): ?>
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
		
	</div>
</div>
