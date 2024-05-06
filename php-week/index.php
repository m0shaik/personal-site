
<?php

$noun = "BJ";
$nouns = "Bouroojes";
$verb = "masturbate";
$bodypart = "buttholes";
$adjective = "glorious";

?>




<p> Today, every student has a computer small enough to fit into their <span><?=$noun?></span>. You can solve any math problem by simply pushing the computer’s little <?=$nouns?>.

Computers can add, multiply, divide, and <?=$verb?>. They can also <?=$verb?> better than a human.

Some computers have their own <?=$bodypart?>. Other’s have a/an <?=$adjective?>screen that shows all kinds of <?=$nouns?> and <?=$adjective?> figures</p>



<!-- echo a string -->
<?php 


echo "mshaikh"; 

//echo a number//
echo 1;

//echo a number + number//
 echo 3 + 3; 

//echo a string + a number//
 // echo "mshaikh" + 1;

//concatenate a few strings together (and echo them!)//
 $price = "30 pounds";
 $crime = "murder";
 $numberone = 35;
 $numbertwo = 40 + 45;
 $url = "www.youtube.com";

 $sentence = "He really did" . $crime . " the guy for a mere" . $price . ".";

 
 echo $sentence;


//concatenate a string and a number and see what happens//

$sentencetwo = "He lost around" . $numberone . "kilograms.";

//echo a longer sentence with strings and with two numbers added together//

 echo $sentencetwo;


$sentencethree = "I asked a kid in grade 12 to solve a sum. It was pretty simple. I asked him what is a" . $price . "of sweets mixed with " . $numberone . "pounds of candy. To my surprise his answer was" . $numbertwo . "."; 

echo  '<p>' . $sentencethree.  "</p>";

 //Make a variable containing a URL and echo the URL inside of an anchor link//

$sentencefour = "I love watching Andrew Tate's podcast. I have seen them all on" . "<a href='" . $url . "'> google </a>"  ;

echo $sentencefour;

?>


<?php

$currency = "dollars";
$adverb = "stupid";
$noun = "taj mahal";
$vehicle = "train";


$sentence = "We took a " . $vehicle . "to go see the " . $noun . ". A " . $adverb . " guide tricked us into paying him 25 " . $currency . ".";

echo "<p>" . $sentence . "</p";






?>


