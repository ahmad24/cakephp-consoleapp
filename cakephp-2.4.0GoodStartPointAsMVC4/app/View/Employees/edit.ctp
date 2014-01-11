<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Edit Employee'); ?></h3>
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
											echo $this->Form->label('employee_categorie_id', Inflector::humanize('employee_categorie_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('employee_categorie_id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('address', Inflector::humanize('address') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('address',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('telephone', Inflector::humanize('telephone') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('telephone',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('cellphone', Inflector::humanize('cellphone') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('cellphone',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('birthdate', Inflector::humanize('birthdate') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('birthdate',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('employment', Inflector::humanize('employment') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('employment',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('identity', Inflector::humanize('identity') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('identity',
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






