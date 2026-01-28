<?php require_once __DIR__."/app.php"; ?>
<?php require_once __DIR__."/component/navbar.php"; ?>

<style>
	.container{
		padding: 100px 50px;
	}

	h1,p{
		padding: 0px;
		margin: 0px;
	}
	.container h1{
		font-family:Montserrat;
	}
	.container p, a{
		font-family: Poppins;
	}
</style>

<!-- my theoritical analysis -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="<?=BURL ?>question-two" class="btn btn text-white btn-sm" style="background:<?=APP_COLOR ?>;">
				<i class="fas fa-arrow-left"></i>
			</a>
			<h1>Question 2 Theoritical Thinking</h1>
			<p>
				I may be correct in my understanding or wrong, and I appreciate corrections from senior developers, as I am still a junior/intermediate developer aiming to grow and improve my thinking.
			</p>


			<p class="mt-4">
				For this question, the goal is to calculate the total election result for a selected Local Government Area (LGA). An LGA itself does not store votes directly. Voting happens at polling units, and each polling unit belongs to a particular LGA.			
			</p>

			<p class="mt-4">
				The polling_unit table only describes the polling unit as a location and links it to an LGA using the lga_id. It does not store any information about parties or scores. The actual voting results are stored in the announced_pu_results table, where each record represents the score a particular party got in a specific polling unit.
			</p>

			<p class="mt-4">
				Because of this design, a single polling unit can have multiple records in the results table, one for each party. The relationship between polling units and their results is created using the polling unit unique ID (polling_unit.uniqueid and announced_pu_results.polling_unit_uniqueid).
			</p>
		</div>
	</div>
</div>

</body>
</html>