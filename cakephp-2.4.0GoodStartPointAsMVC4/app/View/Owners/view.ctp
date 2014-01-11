<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Owner'); ?>  </h3>
			</div>
			<div class="panel-body">


					<h4 class='col-md-6 col-sm-6'><?php echo __('Id'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($owner['Owner']['id']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Name'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($owner['Owner']['name']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Created'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($owner['Owner']['created']); ?>
			&nbsp;
		</small></h4>
<h4 class='col-md-6 col-sm-6'><?php echo __('Modified'); ?> : &nbsp;&nbsp;<small>		
			<?php echo h($owner['Owner']['modified']); ?>
			&nbsp;
		</small></h4>
					
				

							</div><!-- panel-body -->

		</div><!--first panel-->
					<div class="panel panel-info">
				<div class="panel-heading">
				  <h3 class="panel-title"><?php echo __('Related Cars'); ?></h3>
				</div>
				<div class="panel-body">


					<?php if (!empty($owner['Car'])): ?>
					<table cellpadding = "0" cellspacing = "0" class="table">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Chassis Number'); ?></th>
		<th><?php echo __('Motor Number'); ?></th>
		<th><?php echo __('Registration Number'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Car1 Categorie Id'); ?></th>
		<th><?php echo __('Car2 Categorie Id'); ?></th>
		<th><?php echo __('Car3 Categorie Id'); ?></th>
		<th><?php echo __('Car4 Categorie Id'); ?></th>
		<th><?php echo __('Car5 Categorie Id'); ?></th>
		<th><?php echo __('Registration Date'); ?></th>
		<th><?php echo __('Production Date'); ?></th>
		<th><?php echo __('Car Model'); ?></th>
		<th><?php echo __('Car Color'); ?></th>
		<th><?php echo __('Car Power'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						<?php foreach ($owner['Car'] as $car): ?>
		<tr>
			<td><?php echo $car['id']; ?></td>
			<td><?php echo $car['chassis_number']; ?></td>
			<td><?php echo $car['motor_number']; ?></td>
			<td><?php echo $car['registration_number']; ?></td>
			<td><?php echo $car['customer_id']; ?></td>
			<td><?php echo $car['car1_categorie_id']; ?></td>
			<td><?php echo $car['car2_categorie_id']; ?></td>
			<td><?php echo $car['car3_categorie_id']; ?></td>
			<td><?php echo $car['car4_categorie_id']; ?></td>
			<td><?php echo $car['car5_categorie_id']; ?></td>
			<td><?php echo $car['registration_date']; ?></td>
			<td><?php echo $car['production_date']; ?></td>
			<td><?php echo $car['car_model']; ?></td>
			<td><?php echo $car['car_color']; ?></td>
			<td><?php echo $car['car_power']; ?></td>
			<td><?php echo $car['user_id']; ?></td>
			<td><?php echo $car['owner_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('', array('controller' => 'cars', 'action' => 'view', $car['id']),array('class'=>'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link('', array('controller' => 'cars', 'action' => 'edit', $car['id']),array('class'=>'glyphicon glyphicon-wrench')); ?>
				<?php echo $this->Form->postLink('', array('controller' => 'cars', 'action' => 'delete', $car['id']), array('class'=>'glyphicon glyphicon-trash'), __('Are you sure you want to delete # %s?', $car['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table>
				<?php endif; ?>

					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Car'), array('controller' => 'cars', 'action' => 'add'),array('class'=>'btn btn-default')); ?> </li>
						</ul>
					</div>
				
				</div>
			</div>
		
	</div>
</div>
