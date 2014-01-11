<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Car2 Categories'); ?>  </h3>
			</div>
			<div class="panel-body">




<div class="car2Categories index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('name'); ?></th>
				
						<th><?php echo $this->Paginator->sort('car1_categorie_id'); ?></th>
				
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				
					
					
					
					
					
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($car2Categories as $car2Category): ?>
	<tr>
		<td><?php echo h($car2Category['Car2Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($car2Category['Car2Category']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($car2Category['Car1Categorie']['name'], array('controller' => 'car1_categories', 'action' => 'view', $car2Category['Car1Categorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car2Category['User']['id'], array('controller' => 'users', 'action' => 'view', $car2Category['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'view', $car2Category['Car2Category']['id']),array('class'=>'glyphicon glyphicon-search')); ?>
			<?php echo $this->Html->link('', array('action' => 'edit', $car2Category['Car2Category']['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $car2Category['Car2Category']['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car2Category['Car2Category']['id'])); ?>
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
