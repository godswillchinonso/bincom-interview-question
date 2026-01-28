<?php require_once __DIR__."/app.php"; ?>
<?php require_once __DIR__."/component/navbar.php"; ?>



<style>
	.container{
		padding: 100px 20px;
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


<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<a href="<?=BURL ?>page-two-theory" class="btn btn text-white btn-sm" style="background:<?=APP_COLOR ?>;">
				View My Theory Explanation
			</a>
			<h1>Answer To Question Two</h1>
			<p>
				<span class="text-muted">Question 2: </span>
				Write a program to display the summed total result of all polling units under a selected Local Government Area (LGA).
			</p>
			<p class="mt-3">
				You are not allowed to use the <b>announced_lga_results</b> table to achieve this.
			</p>
			
			<form  class="mt-3 page-two-form-submission">
				<input type="hidden" name="page-two-csrf-token" value="<?=$routerData->page_two_csrf_token ?>">
				<div class="input-group">
					<select class="custom-select" required name="lga">
						<option value="">Please select the Local Government Area</option>

						<?php if ($routerData->lga): ?>
							<?php foreach ($routerData->lga as $record): ?>
								<option value="<?=$record->uniqueid ?>">
									<?=strtoupper($record->lga_name) ?>
								</option>
							<?php endforeach ?>
						<?php endif ?>
					</select>

					<button class="btn btn-dark" type="submit">
						See Result
					</button>
				</div>
			</form>

		</div>
	</div>








	<!-- display record -->
	<div class="row">
		<div class="col-md-12">
			<div class="showAxiosRequestResponse"></div>
		</div>
	</div>



</div>












	<script>
		document.querySelector(".page-two-form-submission").addEventListener("submit",function(event){
			event.preventDefault();
			let form_data= new FormData(this);

			//making a HTTP request using Axios to fetch polling result record.
			axios({
				url:"<?=BURL ?>question/page-two",
				method:"POST",
				data:form_data
			})
			.then(function(response){
				let records = response.data;

				if (records.length === 0) {
		            document.querySelector(".showAxiosRequestResponse").innerHTML = "<p>No results found for this polling unit.</p>";
		            return;
		        }
				let output = `
		            <style>
		                table thead tr th {
		                    font-weight: normal;
		                    font-family: Poppins;
		                }
		            </style>
		            <table class="table table-bordered table-sm mt-2">
		                <thead>
		                    <tr>
		                        <th>Parties</th>
		                        <th>Score</th>
		                    </tr>
		                </thead>
		                <tbody>
		        `;

		        records.forEach(function(record) {
		            output += `
		                <tr>
		                    <td>${record.party_abbreviation}</td>
		                    <td>${record.total_score}</td>
		                </tr>
		            `;
		        });
				
				output += `</tbody></table>`;
				document.querySelector(".showAxiosRequestResponse").innerHTML = output;
			})


			.catch(function(error){

				console.error(`An error occurred: ${error.response?.data ?? "Internal Server Error"}`);
				document.querySelector(".showAxiosRequestResponse").innerHTML = `
					<p class="text-danger">NO RECORD FOUND</p>
				`;
			})
		})
	</script>
</body>
</html>