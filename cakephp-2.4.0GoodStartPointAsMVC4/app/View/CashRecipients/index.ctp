<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Cash Recipients'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="cashRecipients index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('card_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('total_price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('check_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('receivable'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
					
					
					
					
					
						<th><?php echo $this->Paginator->sort('test_price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('end_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('maint_price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('tool_price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('out_service_price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('discount_rate'); ?></th>
				
						<th><?php echo $this->Paginator->sort('discount_amount'); ?></th>
				
						<th><?php echo $this->Paginator->sort('in_cash'); ?></th>
				
						<th><?php echo $this->Paginator->sort('check'); ?></th>
				
						<th><?php echo $this->Paginator->sort('observation'); ?></th>
				
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cashRecipients as $cashRecipient): ?>
	<tr>
		<td><?php echo h($cashRecipient['CashRecipient']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cashRecipient['Card']['id'], array('controller' => 'cards', 'action' => 'view', $cashRecipient['Card']['id'])); ?>
		</td>
		<td><?php echo h($cashRecipient['CashRecipient']['total_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cashRecipient['Check']['id'], array('controller' => 'checks', 'action' => 'view', $cashRecipient['Check']['id'])); ?>
		</td>
		<td><?php echo h($cashRecipient['CashRecipient']['receivable']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cashRecipient['User']['id'], array('controller' => 'users', 'action' => 'view', $cashRecipient['User']['id'])); ?>
		</td>
		<td><?php echo h($cashRecipient['CashRecipient']['test_price']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['maint_price']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['tool_price']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['out_service_price']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['discount_rate']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['discount_amount']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['in_cash']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['check']); ?>&nbsp;</td>
		<td><?php echo h($cashRecipient['CashRecipient']['observation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $cashRecipient['CashRecipient']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $cashRecipient['CashRecipient']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $cashRecipient['CashRecipient']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $cashRecipient['CashRecipient']['id'])); ?>
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
