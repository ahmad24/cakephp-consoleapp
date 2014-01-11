<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Edit Log'); ?></h3>
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
											echo $this->Form->label('log_category_id', Inflector::humanize('log_category_id') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('log_category_id',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message1', Inflector::humanize('message1') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message1',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message2', Inflector::humanize('message2') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message2',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message3', Inflector::humanize('message3') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message3',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message4', Inflector::humanize('message4') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message4',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message5', Inflector::humanize('message5') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message5',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message6', Inflector::humanize('message6') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message6',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message7', Inflector::humanize('message7') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message7',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?></div><div class="form-group"><?php 
											echo $this->Form->label('message8', Inflector::humanize('message8') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('message8',
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






