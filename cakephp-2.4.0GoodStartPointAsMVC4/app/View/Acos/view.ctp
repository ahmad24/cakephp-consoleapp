<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Aco'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aco['Aco']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Parent Aco'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($aco['ParentAco']['id'], array('controller' => 'acos', 'action' => 'view', $aco['ParentAco']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Model'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aco['Aco']['model']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Foreign Key'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aco['Aco']['foreign_key']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Alias'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aco['Aco']['alias']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Lft'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aco['Aco']['lft']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Rght'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aco['Aco']['rght']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Acos'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($aco['ChildAco'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Foreign Key'); ?></th>
		<th><?php echo __('Alias'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($aco['ChildAco'] as $childAco): ?>
		<tr>
			<td><?php echo $childAco['id']; ?></td>
			<td><?php echo $childAco['parent_id']; ?></td>
			<td><?php echo $childAco['model']; ?></td>
			<td><?php echo $childAco['foreign_key']; ?></td>
			<td><?php echo $childAco['alias']; ?></td>
			<td><?php echo $childAco['lft']; ?></td>
			<td><?php echo $childAco['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'acos', 'action' => 'view', $childAco['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'acos', 'action' => 'edit', $childAco['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'acos', 'action' => 'delete', $childAco['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $childAco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Child Aco'), array('controller' => 'acos', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Aros'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($aco['Aro'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Foreign Key'); ?></th>
		<th><?php echo __('Alias'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($aco['Aro'] as $aro): ?>
		<tr>
			<td><?php echo $aro['id']; ?></td>
			<td><?php echo $aro['parent_id']; ?></td>
			<td><?php echo $aro['model']; ?></td>
			<td><?php echo $aro['foreign_key']; ?></td>
			<td><?php echo $aro['alias']; ?></td>
			<td><?php echo $aro['lft']; ?></td>
			<td><?php echo $aro['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'aros', 'action' => 'view', $aro['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'aros', 'action' => 'edit', $aro['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'aros', 'action' => 'delete', $aro['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $aro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Aro'), array('controller' => 'aros', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		
	</div>
</div>
