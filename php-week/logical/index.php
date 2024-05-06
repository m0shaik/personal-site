<h1> PHP practice. </h1>

<?php

	$large = "woodbine";
	$small = "lakeshore";
	$medium = false;

	if ($medium){

	} else {
		$medium = "rexall";
	} 

?>

<p>
	There are 32 bridges in this town. The largest is <?=$large?>. The smallest is <?=$small?>.
</p>

<p>
	There of course is a medium bridge. Its called <?=$medium?>.
</p>

<?php

	$sumone = 17 + 22;
	$sumtwo = 19 + 19;
	$sumthree = 20 + 20;

	$total = "$sumone" . " or " . "$sumtwo";



?>


<p>
	Some argued that the total was <?=$total?>. But when the cost was broken up, It came up to <?=$sumthree?>.
</p>

<?php 

$bill1 = 29;
$bill2 = 9;

$total = $bill1 + $bill2;

if ($total > 40) {

	$color = 'red';

} else {
	$color = 'green';
}

	


	if ($sumthree <= 39){



	} else {

	$sumthree = 24 + 24;

	}

?>


<p style='color: <?=$color?>;'>
	If the tip is added then the total would be <?=$sumthree?>.

	<p>
		<?=$total?>
	</p>
</p>