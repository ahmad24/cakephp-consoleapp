


<div class="container">
	
	<?php
		echo $this->Form->create('User',array("class"=>"form-signin"));
	?>
	<h2 class="form-signin-heading">Sign Up</h2>
	<?php
		echo $this->Form->input("email",
			array("class"=>"form-control", "placeholder"=>"Email address", "required"=>"required", "autofocus"=>"autofocus")
		);
		echo $this->Form->input("password",
			array("type"=>"password","class"=>"form-control", "placeholder"=>"Password", "required"=>"required")
		);
		echo $this->Form->input("password_confirm",
			array("type"=>"password","class"=>"form-control", "placeholder"=>"Confirm Password", "required"=>"required")
		);
		echo "<br />";
		echo $this->Form->button("Register", array("class"=>"btn btn-lg btn-primary btn-block", "type"=>"submit"));

		
		echo $this->Form->end();
	?>
      
</div> <!-- /container -->
