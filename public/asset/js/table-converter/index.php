<?php require_once "../../../config/app-config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Are You Lost On Our Software? We Could Help You.</title>

	<link rel="stylesheet" type="text/css" href="../../../asset/css/bootstrap/bootstrap-five.min.css">
	<link rel="stylesheet" type="text/css" href="../../../asset/css/bootstrap/bootstrap-four.min.css">



	<!--Favicon-->
	<link rel="icon"  href="../../../<?=APP_LOGO ?>" sizes="16x16">
	<!--Apple touch icon-->
	<link rel="apple-touch-icon" href="../../../<?=APP_LOGO ?>" sizes="16x16">




	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body >

	<div class="container py-5"  >
		<div class="row">
			<div class="col-md-6 offset-md-3" align="center">
				<img src="../../../<?=APP_LOGO ?>" class="rounded-circle" width="100">
				<h4 class="display-6" style="font-family:Roboto;">
					Are You Lost On Our Software? We Could Help You.
				</h4>
				<p>
					It looks like there was an incorrect URL request from your end. We're here to help you find your way to the right page.
					All you have to do is click on the "Get Direction" button below, and we will guide you to a page where you can access accurate and connected links instead of trying to guess your way around.
				</p>
				<a href="<?=BURL ?>" class="btn btn text-white" style="background:#3119f0;">Get Direction</a>
			</div>
		</div>
	</div>




	<script src="../../../asset/js/jquery-3.3.1.min.js"></script>
	<script src="../../../asset/js/bootstrap/bootstrap-five.bundle.min.js"></script>
	<script src="../../../asset/js/bootstrap/bootstrap-four.min.js"></script>
	<script src="../../../asset/js/bootstrap/popper.min.js"></script>

</body>
</html>