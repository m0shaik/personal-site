<?php 

	$type = "";
	$year = 0;
	$price = 0;
	$console = "";
	$hasConsole = false;
	$consoleError = false;
	$hasType = false;
	$hasYear = false;
	$typeError = false;
	$yearError = false;
	$hasPrice = false;
	$priceError = false;

	if (isset($_POST["add"]) ) {


	if (isset($_POST["type"]) ) {
			$type = $_POST["type"];

			if ( strlen($type) > 0) {
				$hasType = true;
			} else {
				$typeError = "Please add a name.";

			}

		}

	if (isset($_POST["year"]) ) {
		$year = $_POST["year"];	

		if ( intval($year) > 0) {
			$hasYear = true;
		} else {
			$yearError = "Please add a year.";
			}

		}

	if (isset($_POST["price"]) ) {
		$price = $_POST["price"];

		if ( intval($price) > 0) {
			$hasPrice = true;
		} else {
			$priceError = "Please add a price.";
		}	

	}

	if (isset($_POST["console"]) ) {
		$console = $_POST["console"];

        if (empty($console)) {
            $errorConsole = "Please select a game.";
        } else {
            $hasConsole = "Form submitted successfully!";
            // Perform further actions here, like saving to a database
        }

	}	

	

		$newGame = [
		"id" => uniqid('game'),
		"name" => $type,
		"year" => $year,
		"price" => $price,
		"console" => $console,
	];

	addGame($newGame);





}

 ?>


<h1>Create</h1>

<form method='POST'>
	
	<field>
		<label>Name</label>
		<input name="type" value='<?=$type?>'>
		<?php if ($typeError) { ?>
			<p class='error'><?=$typeError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Year</label>
		<input type="number" name="year" value='<?$year?>'>
		<?php if ($yearError) { ?>
			<p class='error'><?=$yearError?></p>
		<?php } ?>

	</field>

	<field>
		<label for="consoles">Console</label>
		<select name="console" id="consoles" value='<?$console?>'>
			<option value="PS5">PS5</option>
			<option value="XBOX">XBOX</option>
			<option value="PC">PC</option>
		</select>
		
	</field>

	<field>
		<label>Price</label>
		<input type="number" name="price" value='<?$price?>'>
		<?php if ($priceError) { ?>
			<p class='error'><?=$priceError?></p>
		<?php } ?>
	</field>


	<button type='submit' name='add'>
		Add Game.
	</button>

</form>