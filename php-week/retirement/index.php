<style>
	
	form{
		max-width: 500px;
		padding: 10px;

	}

	.age-form, .retire-form {
		display: flex;
		flex-direction: column;
		gap: 10px;

	}

	.retire-form label{
		padding-top: 10px;
	}

	button{
		margin-top: 10px;
		font-size: 15px;
	}

	.result{
		color: blue;
	}

	.result2{
		color: green;
	}


</style>


<?php

function showErrors() {
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
showErrors();



$age = 0;
$retire = 0;
$currentYear = date("Y"); 


	
	if( isset($_POST["submitted"]) ) {



		if ( isset($_POST["age"]) ) {
			if ( $_POST["age"] >= 0 ) {	
				$age = $_POST["age"];
			}
		}

		if ( isset($_POST["retire"]) ) {
			if ( $_POST["retire"] >= 0 ) {
				$retire = $_POST["retire"];
			}	

		}

		$total = floatval($retire) - floatval($age);

		$retireYear = $currentYear + $total;
	

	}

?>






<form method='POST'>

	<h1> Retirement Calculator.</h1>

	<div class="Age-form">
		<label for="">What is your current age?</label>
		<input type="number" name='age'>
	</div>

	<div class="retire-form">
		<label for=""> At what age would you like to retire?</label>
		<input type="number" name='retire'>
	</div>

	<button type='submit' name='submitted'> Submit </button>

	<?php 	
	if (isset ($total)) {
	echo "<p class='result'> You have " . "$total" . " years left untill you can retire. </p>"; }

	 ?>

	<?php 	
	if (isset ($total)) {
	echo "<p class='result2'> It's $currentYear, so you can retire in $retireYear. </p>"; }

	 ?>
			

</form>