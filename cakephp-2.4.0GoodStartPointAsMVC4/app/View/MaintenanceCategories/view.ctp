<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Maintenance Category'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Point'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['point']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Estimated Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['estimated_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($maintenanceCategory['User']['id'], array('controller' => 'users', 'action' => 'view', $maintenanceCategory['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenanceCategory['MaintenanceCategory']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
		
	</div>
</div>
