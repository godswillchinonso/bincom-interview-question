<?php 
	declare(strict_types=1);
	namespace App\Core\Response;

	class WebResponse{

		

		// Sweet Alert Notification Function
		public  function SweetAlertNotification(string $icon, string $message):void
		{
			echo "
				<script>
					Swal.fire({
						html:`$message`,
						icon:'$icon'
					})
				</script>
			";
			exit();
		}




		/*
			used when making an synchronous or AJAX request and expect the server to return alert messages using sweetalert. But you must first install sweet alert in your working directory as a cdn or download it.
		*/
		public  function SweetAlertNotificationWithRedirecting(string $message, string $icon, string $route):void
		{

			echo "
				<script>
					Swal.fire({
						html:`$message`,
						icon:`$icon`
					}).then((result)=>{
						if(result.isConfirmed){
							window.location.assign('".BURL."$route')
						}
					})
				</script>
			";

			exit();
		}



		// Bootstrap Notification Function used when making an asynchronous request.
		public  function BootstrapAlertNotification(string $message, string $color):void
		{

			echo"
				<div class='alert alert-$color alert-dismissible fade show' role='alert'>
				  $message
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
			";

			exit();
		}


		/*
			This method is used when you are making a synchronous request. All errors are stored in session and displayed as a flash message which the flash message is a fronend code and not a backend code and can be located at __DIR__."/../../../view/session-flash-message/session-msg.php"
		*/
		public  function SetFlashMessage(string $msg, string $color="danger"):void
		{
			$_SESSION['form-alert-color']=$color;
			$_SESSION['form-alert-message']=$msg;

		
		}




		/*
			Bootstrap Animate Notification Function is used alongside an Ajax Request to display alert notification with animation effect but you would have to install animate.min.css as cdn or download it to your project directory before this could work with the effect.
		*/
		public  function BootstrapAlertAnimateNotification(?string $message, ?string $color):void
		{

			echo"
				<div class='alert alert-$color alert-dismissible fade show animate__animated animate__fadeInDown' role='alert'>
				  $message
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>
			";
			exit();
		}




		/*
			when making an asynchronous request and chooses to display error and success messages from the server beneath form input field, you could use this function
		*/
		public  function inlineAlert(?string $message, ?string $color):void
		{

			echo "<small class='text-$color'>$message</small>";
			exit();
		}
	}