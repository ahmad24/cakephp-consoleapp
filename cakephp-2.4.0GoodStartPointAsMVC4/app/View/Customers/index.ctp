<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Customers'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="customers index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('name'); ?></th>
				
						<th><?php echo $this->Paginator->sort('driver_name'); ?></th>
				
						<th><?php echo $this->Paginator->sort('customer_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('address'); ?></th>
				
						<th><?php echo $this->Paginator->sort('telephone'); ?></th>
				
						<th><?php echo $this->Paginator->sort('cellphone'); ?></th>
				
						<th><?php echo $this->Paginator->sort('contact1'); ?></th>
				
						<th><?php echo $this->Paginator->sort('contact2'); ?></th>
				
						<th><?php echo $this->Paginator->sort('birthdate'); ?></th>
				
						<th><?php echo $this->Paginator->sort('identity'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
					
					
					
					
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['driver_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['CustomerCategorie']['name'], array('controller' => 'customer_categories', 'action' => 'view', $customer['CustomerCategorie']['id'])); ?>
		</td>
		<td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cellphone']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['contact1']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['contact2']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['identity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['User']['id'], array('controller' => 'users', 'action' => 'view', $customer['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $customer['Customer']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $customer['Customer']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $customer['Customer']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
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
