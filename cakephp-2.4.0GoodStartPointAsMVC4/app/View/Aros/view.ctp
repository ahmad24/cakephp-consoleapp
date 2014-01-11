<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Aro'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aro['Aro']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Parent Aro'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($aro['ParentAro']['id'], array('controller' => 'aros', 'action' => 'view', $aro['ParentAro']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Model'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aro['Aro']['model']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Foreign Key'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aro['Aro']['foreign_key']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Alias'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aro['Aro']['alias']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Lft'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aro['Aro']['lft']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Rght'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($aro['Aro']['rght']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Aros'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($aro['ChildAro'])): ?>
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
						<?php foreach ($aro['ChildAro'] as $childAro): ?>
		<tr>
			<td><?php echo $childAro['id']; ?></td>
			<td><?php echo $childAro['parent_id']; ?></td>
			<td><?php echo $childAro['model']; ?></td>
			<td><?php echo $childAro['foreign_key']; ?></td>
			<td><?php echo $childAro['alias']; ?></td>
			<td><?php echo $childAro['lft']; ?></td>
			<td><?php echo $childAro['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'aros', 'action' => 'view', $childAro['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'aros', 'action' => 'edit', $childAro['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'aros', 'action' => 'delete', $childAro['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $childAro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Child Aro'), array('controller' => 'aros', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Acos'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($aro['Aco'])): ?>
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
						<?php foreach ($aro['Aco'] as $aco): ?>
		<tr>
			<td><?php echo $aco['id']; ?></td>
			<td><?php echo $aco['parent_id']; ?></td>
			<td><?php echo $aco['model']; ?></td>
			<td><?php echo $aco['foreign_key']; ?></td>
			<td><?php echo $aco['alias']; ?></td>
			<td><?php echo $aco['lft']; ?></td>
			<td><?php echo $aco['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'acos', 'action' => 'view', $aco['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'acos', 'action' => 'edit', $aco['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'acos', 'action' => 'delete', $aco['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $aco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Aco'), array('controller' => 'acos', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		
	</div>
</div>
