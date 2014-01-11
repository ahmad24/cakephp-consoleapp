


<div class="container">

	<?php
		echo $this->Session->flash('auth',array('element' => 'error_message'));
		echo $this->Session->flash('flash', array('element' => 'error_message'));
	?>
	<?php

		echo $this->Form->create('User',array("class"=>"form-signin"));
	?>
	<h2 class="form-signin-heading">Please sign in</h2>
	<?php
		echo $this->Form->input("email",
			array("class"=>"form-control", "placeholder"=>"Email address", "required"=>"required", "autofocus"=>"autofocus")
		);
		echo $this->Form->input("password",
			array("class"=>"form-control", "placeholder"=>"Password", "required"=>"required")
		);
		echo $this->Form->button("Login", array("class"=>"btn btn-lg btn-primary btn-block", "type"=>"submit"));

		//register link
		echo "<br />";
		echo $this->Html->link(
			'register new',
			array('controller' => 'users', 'action' => 'register'),
			array('id'=>'mylink', 'class'=>'myclass')
		);

		echo $this->Form->end();
	?>
      
</div> <!-- /container -->
