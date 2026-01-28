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
			<a href="<?=BURL ?>" class="btn btn text-white btn-sm" style="background:<?=APP_COLOR ?>;">
				<i class="fas fa-arrow-left"></i>
			</a>
			<h1>My Theoritical Thinking</h1>
			<p>
				I may be correct in my thinking or wrong, and I’m very open to corrections from senior developers, as I’m still an intermediate/junior developer trying to grow and think better.
			</p>


			<p class="mt-4">
				Before an election is conducted, there already exist different polling units. Since a ward is in an LGA and an LGA is in a state, it means polling units are organized within these locations. For example, we can have a polling unit called “Phalga One”. People gather at this polling unit to vote. These people could belong to another database table which we are not concerned about for this project.
			</p>

			<p class="mt-4">
				For voting to take place, there must be political parties (PDP, APC, APGA, etc.) contesting. This means parties exist independently, and there is usually another table that represents these parties.
			</p>

			<p class="mt-4">
				When voters come to the polling unit and vote, the system needs a way to store the result of the votes. This introduces another database table that captures the parties, polling unit unique id and the scores they receive from voting. This table may contain other columns, but for the purpose of this project, the important ones are the party and the score, which help determine how each party performed at a particular polling unit.
			</p>
			<p>
				This means that if we have a total of 4 polling units and 5 parties, then for each polling unit, there will be results for all 5 parties. So if I select “Polling Unit A”, it will show the 5 parties and their scores. If I select “Polling Unit B”, it will also show the same parties, but with different scores.
			</p>


			<p>
				From my understanding, this is why a single polling unit can be linked to multiple result records, and this is what I currently understand as a one-to-many database relationship, where one polling unit is associated with many result entries.
			</p>
		</div>
	</div>
</div>

</body>
</html>