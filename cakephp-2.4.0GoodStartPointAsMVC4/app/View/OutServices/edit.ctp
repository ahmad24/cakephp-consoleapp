<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Edit Out Service'); ?></h3>
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
											echo $this->Form->label('name', Inflector::humanize('name') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('name',
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
											echo $this->Form->label('supplier_name', Inflector::humanize('supplier_name') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('supplier_name',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('price', Inflector::humanize('price') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('price',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('count', Inflector::humanize('count') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('count',
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
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('user_id', Inflector::humanize('user_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('user_id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('outservice_supplier_id', Inflector::humanize('outservice_supplier_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('outservice_supplier_id',
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






