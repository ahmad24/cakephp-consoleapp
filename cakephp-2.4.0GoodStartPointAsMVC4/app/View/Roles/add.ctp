<div class="row">
	<div class="col-md-3">
      <?php echo $this->element('main_menu');?>	</div>
	<div class="col-md-8 ">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo __('Add Role'); ?></h3>
			</div>
			<div class="panel-body">
				<div id="summary-validation" >
					<ul></ul>
				</div>
				<?php echo $this->Form->create('', array('class'=>'form-horizontal')); ?>				
					<div class="form-group"><?php 
											echo $this->Form->label('name', Inflector::humanize('name') ,array('class'=>'col-sm-2 control-label'));
											echo $this->Form->input('name',
												array(
													'label'=>false,
													'div'=>array('class'=>'col-sm-10'),
													'class'=>'form-control',
													'id'=>'emailField'
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
<script type="text/javascript">
	// just for the demos, avoids form submit
	// $(document).ready(function() {
	// 		$('.form-horizontal').validate({ // initialize the plugin
	//         submitHandler: function (form) { // for demo
	//             alert('valid form submitted'); // for demo
	//             return false; // for demo
	//         }
	//     });
	//     $('#emailField').rules("add", { required: true, messages: { required: "Expiration Date is required" } });
	// });
	$(document).ready(function() {
		
		$('.form-horizontal').validate({ 
			// initialize the plugin 
	    });
	    $('#emailField').rules("add", { required: true, messages: { required: "Role Name is required" } });
	});
	
</script>
<?php
//let $modelName be User  
// App::import("Model", "User");  
// $model = new User();
// pr($model->validate);
?>
<?php
//load model------------------------------------------------------
App::import("ViewModel", "RoleModel");  
$model = new RoleModel();
//pr($model->model);
//get validation from DB models -----------------------------------
foreach ($model->model as $key=>$value) {
	App::import("Model", $key); 
	//pr($key);
	$modelValidation = new $key();
	$validation[$key] = $modelValidation->validate;
	//pr($validation);
	
}
//pr($validation);
//loop view model to read validation from DB models -------------------
foreach ($model->model as $modelName => $fields) {
	//pr($validation[$modelName]);
	if(is_array($fields)){
		foreach ($fields as $value) {
			pr($validation[$modelName][$value]);
		}
	}else{
		
		pr($validation[$modelName][$fields]);
	}
}
?>


			




