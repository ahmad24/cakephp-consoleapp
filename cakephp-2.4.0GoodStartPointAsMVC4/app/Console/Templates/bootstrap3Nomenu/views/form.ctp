<div class="row">
	<div class="col-md-3">
      <?php echo "<?php echo \$this->element('main_menu');?>"; ?>
	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h3>
			</div>
			<div class="panel-body">
				<?php echo "<?php echo \$this->Form->create('', array('class'=>'form-horizontal')); ?>";?>
				
					<?php
							
							foreach ($fields as $field) {
								if (strpos($action, 'add') !== false && $field == $primaryKey) {
									continue;
								} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
									//echo "\t\techo \$this->Form->input('{$field}');\n";
									echo '<div class="form-group">';
									echo "<?php 
											echo \$this->Form->label('{$field}', Inflector::humanize('{$field}') ,array('class'=>'col-sm-2 control-label'));
											echo \$this->Form->input('{$field}',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?>";
									echo '</div>';
								}
							}
							if (!empty($associations['hasAndBelongsToMany'])) {
								foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
									//echo "\t\techo \$this->Form->input('{$assocName}');\n";
									echo '<div class="form-group">';
									echo "<?php 
											echo \$this->Form->label('{$assocName}', Inflector::humanize('{$assocName}') ,array('class'=>'col-sm-2 control-label'));
											echo \$this->Form->input('{$assocName}',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?>";
									echo '</div>';
								}
							}
							
					?>
					
				
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <?php echo "<?php echo \$this->Form->postButton('Submit',array(),array('class'=>'btn btn-default'));?>";
				      ?>
				    </div>
				    						
				</div>	
				<?php
					echo "<?php echo \$this->Form->end(); ?>\n";
				?>
			</div>
		</div>
	</div>
</div>






