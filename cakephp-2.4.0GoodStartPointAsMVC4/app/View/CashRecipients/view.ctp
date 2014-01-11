<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Cash Recipient'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Card'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($cashRecipient['Card']['id'], array('controller' => 'cards', 'action' => 'view', $cashRecipient['Card']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Total Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['total_price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Check'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($cashRecipient['Check']['id'], array('controller' => 'checks', 'action' => 'view', $cashRecipient['Check']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Receivable'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['receivable']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($cashRecipient['User']['id'], array('controller' => 'users', 'action' => 'view', $cashRecipient['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['version']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Test Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['test_price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('End Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['end_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Maint Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['maint_price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Tool Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['tool_price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Out Service Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['out_service_price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Discount Rate'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['discount_rate']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Discount Amount'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['discount_amount']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('In Cash'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['in_cash']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Check'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['check']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Observation'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($cashRecipient['CashRecipient']['observation']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
		
	</div>
</div>
