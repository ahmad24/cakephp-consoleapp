<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('signin');
		echo $this->Html->css('doc');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?php
    	// in your view
		$this->Html->script('jquery-1.9.1', array('block' => 'jquery'));
		$this->Html->script('jquery-ui', array('block' => 'jquery'));
		
		$this->Html->script('bootstrap.min', array('block' => 'jquery'));
		
		$this->Html->script('jquery.validate.min', array('block' => 'jqueryValidation'));
		$this->Html->script('additional-methods', array('block' => 'jqueryValidation'));

	?>
	<?php
		// in your layout
		echo $this->fetch('jquery');
		echo $this->fetch('jqueryValidation');
	?>
</head>
<body>
	<div id="container">
		<div class="bs-header" id="content">
			<div class="container">
				<h1>Epic ERP System</h1>
				<p>___________________________________________</p>
				<div class="carbonad">
					<div id="azcarbon" style="text-align: center;">
						<span class="carbonad-image">
							<a href="#" title="" target="_blank">
								<?php
									echo $this->Html->image('mercedes-benz-sf1-final-concept-design-6.jpg', array('alt' => 'Epic System',"class"=>'carbonad-image carbonad-img',"border"=>"0", "height"=>"90" ,"width"=>"120"));
								?>
							</a>

						</span>
					</div>
				</div>
			</div>
	    </div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

			
		</div>

		<script type="text/javascript">
			//mark active menu
			$(document).ready(function() {
				$(".<?php echo $this->request->params['controller'].'_'.$this->request->params['action'];?>").parent().addClass("active");
				$(".<?php echo $this->request->params['controller'];?>").parent().addClass("active");
			});
			$("[data-toggle]").click(function(event) {
			    /* Act on the event */
			    var ulNameToShow = $(this).attr("data-toggle");
			    $("[data-name='"+ulNameToShow+"']").toggle("fast");
			});

			//set jquery validation default
			jQuery.validator.setDefaults({
				
		        //show only on click submit
		        onfocusout: false,
		        onkeyup: false,
	   			onclick: false,
		        //All error labels are displayed inside an unordered list with the ID "validationSummary"
	            //Additonal container for error messages. The elements given as the "errorContainer" are all shown and hidden when errors occur.
	            errorContainer: "#summary-validation",
	 			DisplayType : "SummaryList",
	            //A custom message display handler. Gets the map of errors as the first argument and and array of errors as the second, 
	            //called in the context of the validator object.
	            showErrors: function (errorMap, errorList) {
	                $('.errorList').hide();
	                $('.inlineMessage').hide();
	                $('#summary-validation').hide();
	                var messages = "";
	                
	                if(errorList.length > 0){
	                	
	                	$.each(errorList, function (index, value) {
		                    var id = $(value.element).attr('id');
		                    //messages += "<a title='click to view field' href='javascript:$("+id+").focus();'><span>" + (index + 1) + value.message + "</span></a>";
		                    messages += "<a title='click to view field' href='javascript:$("+id+").focus();'><span>" + value.message + "</span></a>";
		                });
		                messages = "<div class='alert alert-danger'>" + messages + "</div>";
	                }
	                switch (jQuery.validator.defaults.DisplayType) {
	                    case "Popup":
	 						alert('Be sure to include jquery ui css');
	                        //Showing validation summary in Popup window
	                        $('#summary-validation').html(messages);
	                        $('#summary-validation').dialog();
	                        break;
	                    case "SummaryList":
	 
	                        //Showing validation summary in list of the same page
	                        $('#summary-validation').html(messages);
	                        $('#summary-validation').show();
	                        break;
	                    case "Inline":
	 						
	                        //Showing validation in inline format
	                        $.each(errorList, function (index, item) {
	                            $(item.element).after("<div style='font-weight:bold'>" + item.message)+"</div> ";
	                            //$(item.element).next('div').show();
	                        });
	                        break;
	                    default :
	                    //alert(messages);//class="alert alert-danger"
	                        //Showing validation summary in list of the same page
	                        $('#summary-validation').html(messages);
	                        $('#summary-validation').show();
	                        break;
	                }
	            },
	 
	            //If all validations are successfully validate then execute submitHandler function
	            submitHandler: function () {
	                $('#summary-validation').empty();
	                $('#dialog-validation').empty();
	                
	            }
			});
		</script>
		<div id="footer">
			<?php 
				// echo $this->Html->link(
				// 	$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				// 	'http://www.cakephp.org/',
				// 	array('target' => '_blank', 'escape' => false)
				// );
					
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
