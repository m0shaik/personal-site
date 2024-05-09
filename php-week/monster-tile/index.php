

<head>
	<link rel="stylesheet" href="styles/style.css">
</head>


<body>
	<div class="inner-column">
		<?php

$codey = [

	"name" => "Codey",
	"height" => "2 foot 10 inch",
	"age" => " 6 years",
	"qualities" => "disciplined and focused",
	"physique" => "Red skin. Pink nose. Pink hair",
	"nose" => true, 
	"image" => "images/codey.jpg",
];

$fragoo = [
	"name" => "Fragoo",
	"height" => "2 foot 9 inch",
	"age" => " 6 years",
	"qualities" => "polite and naughty",
	"physique" => "Pink skin.  Pink hair",
	"nose" => false,
	"image" => "images/fragoo.jpg",
];

$limabean = [
	"name" => "Limabean",
	"height" =>"2 foot 11 inch",
	"age" => " 7 years",
	"qualities" => "Loud and determined",
	"physique" => "Green skin. Blue nose. Blue hair",
	"nose" => true,
	"image" => "images/limabean.jpg",
];

$missreads = [
	"name" => "Miss-reads-a-lot",
	"height" =>"2 foot 5 inch",
	"age" => " 5 years",
	"qualities" => "Neat and soft-spoken",
	"physique" => "Blue skin.",
	"nose" => false,
	"image" => "images/miss-reads-a-lot.jpg",
];

$mrbanana = [
	"name" => "Mr-banana",
	"height" =>"3 foot",
	"age" => " 6 years",
	"qualities" => "Funny and Impulsive",
	"physique" => "Yellow skin. Red nose. Red hair",
	"nose" => true,
	"image" => "images/mr-banana.jpg",
];


$orangina = [
	"name" => "Orangina",
	"height" =>"2 foot 5 inch",
	"age" => " 6 years",
	"qualities" => "Quirky and emotional",
	"physique" => "Orange skin. Yellow nose. Yellow hair",
	"nose" => true,
	"image" => "images/orangina.jpg",
];

$shadow = [
	"name" => "Shadow",
	"height" =>"2 foot 8 inch",
	"age" => " 6 years",
	"qualities" => "Grumpy and Serious",
	"physique" => "Purple skin.  Green hair",
	"nose" => false,
	"image" => "images/shadow.jpg",
];


$monsters = [$shadow, $orangina, $codey, $fragoo, $missreads, $mrbanana, $limabean,];

echo "<h1> Monster adoption services. </h1>";

echo "<ol>";

foreach ($monsters as $monster) {

	$name = $monster["name"];
	$height = $monster["height"];
	$age = $monster["age"];
	$quality = $monster["qualities"];
	$physic = $monster["physique"];
	$image = $monster["image"];
	$nose = $monster["nose"];

		if ($nose == true) {
 		
 		$nose = "<br>I hope my nose makes you smile.";

	} else {

		$nose = "<br>Unfortunately I have no nose.";
	}

	$story = " <b>Height</b>" . $height .  " <br> <b>Age</b> " . $age . " <br> <b>Qualities</b> " . $quality . " <br> <b>Appearance</b> " . $physic . ". <br>" . $nose . "";

	$template = "
	<li class='monster-card'>
	<h2>$name</h2>
	<picture> 
		<img src = ' $image ' width = '200'>
	</picture>
	<p class='story'>$story</p>	
	</li>



	";

	echo nl2br("$template");



}


echo "</ol>";

?>
	</div>
</body>