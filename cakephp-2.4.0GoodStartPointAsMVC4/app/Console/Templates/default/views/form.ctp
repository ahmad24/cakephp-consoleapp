<div class="row">
	<div class="col-md-3">
      <div class="bs-sidebar hidden-print affix" role="complementary">
        <ul class="nav bs-sidenav">
	
<?php if (strpos($action, 'add') === false): ?>
		<li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), null, __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
<?php endif; ?>
		<li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?>"; ?></li>
<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
					echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
					$done[] = $details['controller'];
				}
			}
		}
?>
		</ul>
	  </div>
	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h3>
			</div>
			<div class="panel-body">
			
				<div class="form-group">
					<?php
							echo "\t<?php\n";
							foreach ($fields as $field) {
								if (strpos($action, 'add') !== false && $field == $primaryKey) {
									continue;
								} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
									//echo "\t\techo \$this->Form->input('{$field}');\n";
									echo "<?php 
											echo \$this->Form->label('{$field}', Inflector::humanize('{$field}') ,array('class'=>'col-sm-2 control-label'));
											echo \$this->Form->input('{$field}',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?>";
								}
							}
							if (!empty($associations['hasAndBelongsToMany'])) {
								foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
									//echo "\t\techo \$this->Form->input('{$assocName}');\n";
									echo "<?php 
											echo \$this->Form->label('{$assocName}', Inflector::humanize('{$assocName}') ,array('class'=>'col-sm-2 control-label'));
											echo \$this->Form->input('{$assocName}',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control'
													)
											);?>";
								}
							}
							echo "\t?>\n";
					?>
					
				</div>
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






