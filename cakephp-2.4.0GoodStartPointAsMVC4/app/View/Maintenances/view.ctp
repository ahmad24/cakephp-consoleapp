<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Maintenance'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Card'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($maintenance['Card']['id'], array('controller' => 'cards', 'action' => 'view', $maintenance['Card']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Maintenance Categorie'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($maintenance['MaintenanceCategorie']['name'], array('controller' => 'maintenance_categories', 'action' => 'view', $maintenance['MaintenanceCategorie']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Employee'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($maintenance['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $maintenance['Employee']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Assistantid'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['assistantid']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Start Date'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['start_date']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Finish Date'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['finish_date']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Point'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['point']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Estimated Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['estimated_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Observation'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['observation']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($maintenance['User']['id'], array('controller' => 'users', 'action' => 'view', $maintenance['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($maintenance['Maintenance']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
		
	</div>
</div>
