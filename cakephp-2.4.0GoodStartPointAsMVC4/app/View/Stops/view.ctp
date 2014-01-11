<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Stop'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($stop['Stop']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Card'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($stop['Card']['id'], array('controller' => 'cards', 'action' => 'view', $stop['Card']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Status'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($stop['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $stop['Status']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Stop Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($stop['Stop']['stop_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Resume Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($stop['Stop']['resume_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Resone'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($stop['Stop']['resone']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Observation'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($stop['Stop']['observation']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Resume Observation'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($stop['Stop']['resume_observation']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($stop['Stop']['created']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
		
	</div>
</div>
