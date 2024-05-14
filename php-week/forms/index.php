<style>
	
	form{
		max-width: 500px;
		padding: 10px;

	}

	.cost-form, .km-form {
		display: flex;
		flex-direction: column;
		gap: 10px;

	}

	.km-form label{
		padding-top: 10px;
	}

	button{
		margin-top: 10px;
		font-size: 15px;
	}

	.result{
		color: blue;
	}


</style>


<?php

function showErrors() {
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
showErrors();



$rate = 0;
$distance = 0;
	
	if( isset($_POST["submitted"]) ) {



		if ( isset($_POST["rate"]) ) {
			if ( $_POST["rate"] >= 0 ) {	
				$rate = $_POST["rate"];
			}
		}

		if ( isset($_POST["distance"]) ) {
			if ( $_POST["rate"] >= 0 ) {
				$distance = $_POST["distance"];
			}	

		}

		$total = floatval($rate) * floatval($distance);


	

	}

?>






<form method='POST'>

	<p> Car rental form.</p>

	<div class="cost-form">
		<label for="">Charges per Km</label>
		<input type="number" name='rate'>
	</div>

	<div class="km-form">
		<label for=""> Number of Km</label>
		<input type="number" name='distance'>
	</div>

	<button type='submit' name='submitted'> Submit </button>

	<?php 	
	if (isset ($total)) {
	echo "<p class='result'> Your total cost is " . "$total" . "$. </p>"; }

	 ?>


			

</form>