<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Check'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Number'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['number']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Amount'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['amount']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Bank Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['bank_name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Bank Branch'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['bank_branch']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Maturity Date'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['maturity_date']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($check['User']['id'], array('controller' => 'users', 'action' => 'view', $check['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($check['Check']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cash Recipients'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($check['CashRecipient'])): ?>
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
						<?php foreach ($check['CashRecipient'] as $cashRecipient): ?>
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
		
	</div>
</div>
