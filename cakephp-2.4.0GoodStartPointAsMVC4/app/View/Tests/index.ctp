<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Tests'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="tests index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('card_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('test_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('price'); ?></th>
				
						<th><?php echo $this->Paginator->sort('estimated_time'); ?></th>
				
						<th><?php echo $this->Paginator->sort('observation'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
					
					
					
					
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tests as $test): ?>
	<tr>
		<td><?php echo h($test['Test']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($test['Card']['id'], array('controller' => 'cards', 'action' => 'view', $test['Card']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($test['TestCategorie']['name'], array('controller' => 'test_categories', 'action' => 'view', $test['TestCategorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($test['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $test['Employee']['id'])); ?>
		</td>
		<td><?php echo h($test['Test']['price']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['estimated_time']); ?>&nbsp;</td>
		<td><?php echo h($test['Test']['observation']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($test['User']['id'], array('controller' => 'users', 'action' => 'view', $test['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $test['Test']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $test['Test']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $test['Test']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $test['Test']['id'])); ?>
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
