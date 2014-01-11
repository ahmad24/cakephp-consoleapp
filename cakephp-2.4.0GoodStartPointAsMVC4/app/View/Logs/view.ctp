<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Log'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Log Category'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($log['LogCategory']['name'], array('controller' => 'log_categories', 'action' => 'view', $log['LogCategory']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Message1'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message1']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Message2'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message2']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Message3'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message3']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Message4'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message4']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Message5'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message5']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Message6'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message6']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Message7'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message7']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Message8'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['message8']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($log['Log']['modified']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
		
	</div>
</div>
