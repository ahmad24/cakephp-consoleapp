<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Out Services'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="outServices index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('name'); ?></th>
				
						<th><?php echo $this->Paginator->sort('card_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('supplier_name'); ?></th>
				
						<th><?php echo $this->Paginator->sort('price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('count'); ?></th>
				
						<th><?php echo $this->Paginator->sort('observation'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('outservice_supplier_id'); ?></th>
				
					
					
					
					
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($outServices as $outService): ?>
	<tr>
		<td><?php echo h($outService['OutService']['id']); ?>&nbsp;</td>
		<td><?php echo h($outService['OutService']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($outService['Card']['id'], array('controller' => 'cards', 'action' => 'view', $outService['Card']['id'])); ?>
		</td>
		<td><?php echo h($outService['OutService']['supplier_name']); ?>&nbsp;</td>
		<td><?php echo h($outService['OutService']['price']); ?>&nbsp;</td>
		<td><?php echo h($outService['OutService']['count']); ?>&nbsp;</td>
		<td><?php echo h($outService['OutService']['observation']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($outService['User']['id'], array('controller' => 'users', 'action' => 'view', $outService['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($outService['OutserviceSupplier']['name'], array('controller' => 'outservice_suppliers', 'action' => 'view', $outService['OutserviceSupplier']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $outService['OutService']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $outService['OutService']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $outService['OutService']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $outService['OutService']['id'])); ?>
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
