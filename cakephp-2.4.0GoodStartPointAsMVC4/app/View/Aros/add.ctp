<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Add Aro'); ?></h3>
			</div>
			<div class="panel-body">
				<?php echo $this->Form->create('', array('class'=>'form-horizontal')); ?>				
					<div class="form-group"><?php 
											echo $this->Form->label('parent_id', Inflector::humanize('parent_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('parent_id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('model', Inflector::humanize('model') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('model',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('foreign_key', Inflector::humanize('foreign_key') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('foreign_key',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('alias', Inflector::humanize('alias') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('alias',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('lft', Inflector::humanize('lft') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('lft',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('rght', Inflector::humanize('rght') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('rght',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('Aco', Inflector::humanize('Aco') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('Aco',
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






