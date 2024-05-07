<?php

$mystuff = [34, "Black", true, false, "John"];

$mylist = [

	"name" => "mohammed",
	"age" => 27,
	"height" => "5 foot 9 inch",
	"alive" => true,

];

$total = $mylist["age"] + $mystuff[0];

$favperson = $mystuff[4];

$height = $mylist["height"];

echo "<section class='before-time'";
echo "<p>";
echo "I use to be able to call myself ";
echo $height;
echo " when I use to go by ";
echo $favperson ;
echo ".";
echo "</section";


?>

<p>
	My favourite color is <?=$mystuff[1]?>.
</p>

<p>
	My true name is <?=$mylist["name"]?>.
</p>

<p>
	Right now my age is <?=$mystuff[0]?>.
	I was also once <?=$mylist["age"]?>.
	If I were to combine my ages, It would be <?= $total ?>
</p>