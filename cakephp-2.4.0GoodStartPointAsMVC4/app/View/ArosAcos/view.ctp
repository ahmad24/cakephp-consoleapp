<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Aros Aco'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($arosAco['ArosAco']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Aro'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($arosAco['Aro']['id'], array('controller' => 'aros', 'action' => 'view', $arosAco['Aro']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __('Aco'); ?> : &nbsp;&nbsp;<small>		
			<?php echo $this->Html->link($arosAco['Aco']['id'], array('controller' => 'acos', 'action' => 'view', $arosAco['Aco']['id'])); ?>
			&nbsp;
		
</small></h4><h4 class='col-md-6 col-sm-6'><?php echo __(' Create'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($arosAco['ArosAco']['_create']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __(' Read'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($arosAco['ArosAco']['_read']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __(' Update'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($arosAco['ArosAco']['_update']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __(' Delete'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($arosAco['ArosAco']['_delete']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
		
	</div>
</div>
