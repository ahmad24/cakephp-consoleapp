<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Log Category'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($logCategory['LogCategory']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($logCategory['LogCategory']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Order'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($logCategory['LogCategory']['order']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Visible'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($logCategory['LogCategory']['visible']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($logCategory['LogCategory']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($logCategory['LogCategory']['modified']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Logs'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($logCategory['Log'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Log Category Id'); ?></th>
		<th><?php echo __('Message1'); ?></th>
		<th><?php echo __('Message2'); ?></th>
		<th><?php echo __('Message3'); ?></th>
		<th><?php echo __('Message4'); ?></th>
		<th><?php echo __('Message5'); ?></th>
		<th><?php echo __('Message6'); ?></th>
		<th><?php echo __('Message7'); ?></th>
		<th><?php echo __('Message8'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($logCategory['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['log_category_id']; ?></td>
			<td><?php echo $log['message1']; ?></td>
			<td><?php echo $log['message2']; ?></td>
			<td><?php echo $log['message3']; ?></td>
			<td><?php echo $log['message4']; ?></td>
			<td><?php echo $log['message5']; ?></td>
			<td><?php echo $log['message6']; ?></td>
			<td><?php echo $log['message7']; ?></td>
			<td><?php echo $log['message8']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'logs', 'action' => 'view', $log['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'logs', 'action' => 'edit', $log['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'logs', 'action' => 'delete', $log['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		
	</div>
</div>
