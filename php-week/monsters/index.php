<?php


$burooj = [

	"number" => 49,
	"name" => "Burooj",
	"nick-name" => "femboy",
	"age" => 28,
	"nationality" => "canadian",
	"portrait" => "https:m0shaik.burooj.dev/images/meta-image.png",
	"gay" => true,

];

$talha = [

	"number" => 35,
	"name" => "Talha",
	"nick-name" => "dwarf",
	"age" => 27,
	"nationality" => "indian",
	"portrait" => "https:m0shaik.burooj.dev/images/meta-image.png",
	"gay" => true,
];

$shaik = [

	"number" => 21,
	"name" => "Shaik",
	"nick-name" => "superman",
	"age" => 27,
	"nationality" => "indian",
	"portrait" => "https:m0shaik.burooj.dev/images/meta-image.png",
	"gay" => false,

];

$men = [$burooj, $talha, $shaik];

echo "<ol>";

foreach ($men as $man) {
	
	$number = $man["number"];
	$name  = $man["name"];
	$story = "His age is " . $man["age"] . "." . "His nationality is " . $man["nationality"] . "." ;
	$portrait = $man["portrait"];
	$sexuality = $man["gay"];
	$nickName = $man['nick-name'];

	if ($sexuality == "gay") {

		$sexuality = "I am a curse to the mankind cuz I am Gay. ";
	} else {
		$sexuality = " I am blessed to be straight.";

	}

	$template = "
	<li class='man'>
	<men-card class='$number'>  
		<picture class='portrait'>  
			<img src='  $portrait  ' width='200'>  
		</picture>
		<h2 class='name'>  $name - $nickName </h2> 
		<p class='story'>$story</p>  
		<p class='sexuality'>$sexuality</p>  
	</men-card>
	</li>
	";

	echo "$template";

}

echo "</ol>";

?>


