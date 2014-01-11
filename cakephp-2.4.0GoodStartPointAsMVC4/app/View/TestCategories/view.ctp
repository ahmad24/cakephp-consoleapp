<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Test Category'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('User'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($testCategory['User']['id'], array('controller' => 'users', 'action' => 'view', $testCategory['User']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Price'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['price']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Estimated Time'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['estimated_time']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['modified']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Date Deleted'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['date_deleted']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Version'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($testCategory['TestCategory']['version']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
		
	</div>
</div>
