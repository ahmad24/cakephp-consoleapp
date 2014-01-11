<div class="row">
	<div class="col-md-3">
      <div class="bs-sidebar hidden-print affix" role="complementary">
        <ul class="nav bs-sidenav">
	

		<li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?>"; ?></li>
<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					/*echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'),array('class'=>'{$details['controller']}_index')); ?> </li>\n";
					echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'),array('class'=>'{$details['controller']}_add')); ?> </li>\n";
					$done[] = $details['controller'];*/

					echo "\t\t\t\t\t<li>\n\t
						<a href='javascript:;' class='{$details['controller']}' data-toggle='{$details['controller']}'><?php echo __('".Inflector::humanize($details['controller'])."')?></a>\n
						<ul class='nav' data-name='{$details['controller']}'>\n\t
							<li><?php echo \$this->Html->link(__('List ".Inflector::humanize($details['controller'])."'), array('controller' => '{$details['controller']}','action' => 'index'),array('class'=>'{$details['controller']}_index')); ?></li>\n
							<li><?php echo \$this->Html->link(__('Add ".Inflector::humanize(Inflector::singularize($details['controller']))."'), array('controller' => '{$details['controller']}','action' => 'add'),array('class'=>'{$details['controller']}_add')); ?></li>\n
							
						</ul>\n
					</li>\n\n";
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
			  <h3 class="panel-title"><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?>  </h3>
			</div>
			<div class="panel-body">




<div class="<?php echo $pluralVar; ?> index">
	
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
	</tr>
	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link('', array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'glyphicon glyphicon-search')); ?>\n";
		echo "\t\t\t<?php echo \$this->Html->link('', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'glyphicon glyphicon-wrench')); ?>\n";
		echo "\t\t\t<?php echo \$this->Form->postLink('', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>
	<p>
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>"; ?>
	</p>
	<div class="paging">
	<?php
		echo "<?php\n";
		echo "\t\techo \$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));\n";
		echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
		echo "\t\techo \$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));\n";
		echo "\t?>\n";
	?>
	</div>
</div>

			</div>
		</div>
	</div>
</div>
