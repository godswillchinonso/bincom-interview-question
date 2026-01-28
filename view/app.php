<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<?= $routerData->seo->page_title ?? "" ?>

	<!-- description -->
	<?=$routerData->seo->description ?? "" ?>

	<!-- keyword -->
	<?=$routerData->seo->keywords ?? "" ?>

	<!-- Canonical -->
	<?=$routerData->seo->canonical ?? "" ?>

	<!-- author -->
	<?=$routerData->seo->author ?? "" ?>

	<!-- indexing -->
	<?=$routerData->seo->robots ?? "" ?>



	<!-- facebook title-->
	<?=$routerData->seo->facebook->title ?? "" ?>

	<!-- facebook description -->
	<?=$routerData->seo->facebook->description ?? "" ?>

	<!-- facebook type = website -->
	<?=$routerData->seo->facebook->type ?? "" ?>

	<!-- facebook image -->
	<?=$routerData->seo->facebook->image ?? "" ?>


	<!-- facebook site_name -->
	<?=$routerData->seo->facebook->site_name ?? "" ?>


	<!-- facebook canonical -->
	<?=$routerData->seo->facebook->canonical ?? "" ?>





	<!-- twitter card -->
	<?=$routerData->seo->twitter->card ?? "" ?>

	<!-- twitter title -->
	<?=$routerData->seo->twitter->title ?? "" ?>


	<!-- twitter description -->
	<?=$routerData->seo->twitter->description ?? "" ?>


	<!-- twitter canonical -->
	<?=$routerData->seo->twitter->canonical ?? "" ?>


	<!-- twitter image -->
	<?=$routerData->seo->twitter->image ?? "" ?>







	<!-- Anton Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">



	<!-- Roboto Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


	<!-- Poppins Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">




	<!-- Montserrat Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


	<!-- Google Analytics -->




	<!-- Google Tag Manager -->



	<!-- Google Search Console -->



	<!-- Bing Search Console -->





	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?=APP_LOGO?>" >

	<link rel="apple-touch-icon" href="<?=APP_LOGO?>">

	<link rel="mask-icon" href="<?=APP_LOGO?>" color="white">






	<!-- bootstrap five -->
	<link rel="stylesheet" type="text/css" href="<?=BURL?>public/asset/css/bootstrap-five.min.css">

	<!-- bootstrap four -->
	<link rel="stylesheet" type="text/css" href="<?=BURL?>public/asset/css/bootstrap-four.min.css">
	
	<!-- owl carousel -->
	<link rel="stylesheet" type="text/css" href="<?=BURL?>public/asset/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?=BURL?>public/asset/css/owl.theme.default.min.css">


	<!--Sweet Alert-->
	<link rel="stylesheet" type="text/css" href="<?=BURL?>public/asset/css/sweetalert2.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?=BURL?>public/asset/css/all.min.css">

	<!-- animate -->
	<link rel="stylesheet" type="text/css" href="<?=BURL?>public/asset/css/animate.min.css">







	<!-- JQuery -->
	<script src="<?=BURL?>public/asset/js/jquery-3.7.1.min.js"></script>

	<!-- Bootstrap -->
	<script src="<?=BURL?>public/asset/js/bootstrap-five.bundle.min.js"></script>
	<script src="<?=BURL?>public/asset/js/bootstrap-four.bundle.min.js"></script>

	<!-- Chart Js -->
	<script src="<?=BURL?>public/asset/js/chart.min.js"></script>

	<!-- Owl Carousel -->
	<script src="<?=BURL?>public/asset/js/owl.carousel.min.js"></script>

	<!-- ScrollReveal -->
	<script src="<?=BURL?>public/asset/js/scrollreveal.min.js"></script>

	<!-- Sweet Alert -->
	<script src="<?=BURL?>public/asset/js/sweetalert2.min.js"></script>


	<!-- Axios -->
	<script src="<?=BURL?>public/asset/js/axios.min.js"></script>

</head>
<body>

	<style>
		/*body{
			user-select: none;
		}*/
	</style>





	<script>
		/*document.addEventListener('contextmenu', function (e) {
		    e.preventDefault();
		});

		document.addEventListener('keydown', function (e) {
		    // Ctrl key combinations
		    if (e.ctrlKey) {
		        const blockedKeys = ['u', 's', 'c', 'a', 'p'];
		        if (blockedKeys.includes(e.key.toLowerCase())) {
		            e.preventDefault();
		        }
		    }

		    // F12
		    if (e.key === 'F12') {
		        e.preventDefault();
		    }

		    // Ctrl + Shift + I / J / C
		    if (e.ctrlKey && e.shiftKey && ['i', 'j', 'c'].includes(e.key.toLowerCase())) {
		        e.preventDefault();
		    }
		});*/

	</script>