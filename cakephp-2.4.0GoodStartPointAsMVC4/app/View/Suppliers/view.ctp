<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Supplier'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($supplier['Supplier']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($supplier['Supplier']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($supplier['User']['id'], array('controller' => 'users', 'action' => 'view', $supplier['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($supplier['Supplier']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($supplier['Supplier']['modified']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Tools'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($supplier['Tool'])): ?>
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
						<?php foreach ($supplier['Tool'] as $tool): ?>
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
