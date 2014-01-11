<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Edit Cash Recipient'); ?></h3>
			</div>
			<div class="panel-body">
				<?php echo $this->Form->create('', array('class'=>'form-horizontal')); ?>				
					<div class="form-group"><?php 
											echo $this->Form->label('id', Inflector::humanize('id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('card_id', Inflector::humanize('card_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('card_id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('total_price', Inflector::humanize('total_price') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('total_price',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('check_id', Inflector::humanize('check_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('check_id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('receivable', Inflector::humanize('receivable') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('receivable',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('user_id', Inflector::humanize('user_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('user_id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('deleted', Inflector::humanize('deleted') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('deleted',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('date_deleted', Inflector::humanize('date_deleted') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('date_deleted',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('version', Inflector::humanize('version') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('version',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('test_price', Inflector::humanize('test_price') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('test_price',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('end_time', Inflector::humanize('end_time') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('end_time',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('maint_price', Inflector::humanize('maint_price') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('maint_price',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('tool_price', Inflector::humanize('tool_price') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('tool_price',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('out_service_price', Inflector::humanize('out_service_price') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('out_service_price',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('discount_rate', Inflector::humanize('discount_rate') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('discount_rate',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('discount_amount', Inflector::humanize('discount_amount') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('discount_amount',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('in_cash', Inflector::humanize('in_cash') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('in_cash',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('check', Inflector::humanize('check') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('check',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('observation', Inflector::humanize('observation') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('observation',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div>					
				
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <?php echo $this->Form->postButton('Submit',array(),array('class'=>'btn btn-default'));?>				    </div>
				    						
				</div>	
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>






