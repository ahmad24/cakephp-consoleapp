<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Outservice Supplier'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($outserviceSupplier['OutserviceSupplier']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($outserviceSupplier['OutserviceSupplier']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($outserviceSupplier['User']['id'], array('controller' => 'users', 'action' => 'view', $outserviceSupplier['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($outserviceSupplier['OutserviceSupplier']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($outserviceSupplier['OutserviceSupplier']['modified']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Out Services'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($outserviceSupplier['OutService'])): ?>
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
						<?php foreach ($outserviceSupplier['OutService'] as $outService): ?>
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
		
	</div>
</div>
