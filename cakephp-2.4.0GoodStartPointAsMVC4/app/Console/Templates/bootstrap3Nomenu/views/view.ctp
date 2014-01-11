<div class="row">
	<div class="col-md-3">
      <?php echo "<?php echo \$this->element('main_menu');?>"; ?>
	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo "<?php echo __('{$singularHumanName}'); ?>"; ?>  </h3>
			</div>
			<div class="panel-body">


					<?php
					foreach ($fields as $field) {
						$isKey = false;
						if (!empty($associations['belongsTo'])) {
							foreach ($associations['belongsTo'] as $alias => $details) {
								if ($field === $details['foreignKey']) {
									$isKey = true;
									echo "<h4 class='col-md-6 col-sm-6'><?php echo __('".Inflector::humanize(Inflector::underscore($alias))."'); ?> : &nbsp;&nbsp;<small>";
									echo "\t\t\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t\n</small></h4>";
									
									
									break;
								}
							}
						}
						if ($isKey !== true) {
							echo "<h4 class='col-md-6 col-sm-6'><?php echo __('".Inflector::humanize($field)."'); ?> : &nbsp;&nbsp;<small>";

							echo "\t\t\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</small></h4>\n";
						}
					}
					?>
					
				

				<?php
				if (!empty($associations['hasOne'])) :
					foreach ($associations['hasOne'] as $alias => $details): ?>
					<div class="related">
						<h3><?php echo "<?php echo __('Related " . Inflector::humanize($details['controller']) . "'); ?>"; ?></h3>
					<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
						<dl>
					<?php
							foreach ($details['fields'] as $field) {
								echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
								echo "\t\t<dd>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}']; ?>\n&nbsp;</dd>\n";
							}
					?>
						</dl>
					<?php echo "<?php endif; ?>\n"; ?>
						<div class="actions">
							<ul>
								<li><?php echo "<?php echo \$this->Html->link(__('Edit " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n"; ?>
							</ul>
						</div>
					</div>
					<?php
					endforeach;
				endif;
				if (empty($associations['hasMany'])) {
					$associations['hasMany'] = array();
				}
				if (empty($associations['hasAndBelongsToMany'])) {
					$associations['hasAndBelongsToMany'] = array();
				}

				?>
			</div><!-- panel-body -->

		</div><!--first panel-->
		<?php
		$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
		foreach ($relations as $alias => $details):
			$otherSingularVar = Inflector::variable($alias);
			$otherPluralHumanName = Inflector::humanize($details['controller']);
			?>
			<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo "<?php echo __('Related " . $otherPluralHumanName . "'); ?>"; ?></h3>
				</div>
				<div class="panel-body">


					<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
							<?php
								foreach ($details['fields'] as $field) {
									echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
								}
							?>
							<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
						</tr>
					<?php
					echo "\t<?php foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
							echo "\t\t<tr>\n";
								foreach ($details['fields'] as $field) {
									echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}']; ?></td>\n";
								}

								echo "\t\t\t<td class=\"actions\">\n";
								echo "\t\t\t\t<?php echo \$this->Html->link('', array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}']),array('class'=>'glyphicon glyphicon-search')); ?>\n";
								echo "\t\t\t\t<?php echo \$this->Html->link('', array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}']),array('class'=>'glyphicon glyphicon-wrench')); ?>\n";
								echo "\t\t\t\t<?php echo \$this->Form->postLink('', array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
								echo "\t\t\t</td>\n";
							echo "\t\t</tr>\n";

					echo "\t<?php endforeach; ?>\n";
					?>
					</table>
				<?php echo "<?php endif; ?>\n\n"; ?>
					<div class="actions">
						<ul>
							<li><?php echo "<?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'),array('class'=>'btn btn-default')); ?>"; ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		<?php endforeach; ?>

	</div>
</div>
