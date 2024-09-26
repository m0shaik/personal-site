
<?php 
$game_id = '';
	if ( isset($_GET['game']) ) {
		$game_id = $_GET['game'];
	}


	$game = getGame($game_id);


if (isset($_POST['delete']) ) {


	


	echo "deleted";

	deleteGame($game_id);

}

	 

 ?>

<?php if ( isset($game) ) { ?>

<h1><?=$game["name"]?></h1>

	<picture>
		<img src="images/cod.png" alt="">
	</picture>
	
<h2>Year: <?=$game["year"]?></h2>
<h3>
	For Console: <?=$game["console"]?>
</h3>
<h4>
	Price: <?=$game["price"]?>
</h4>

<form method="POST">


	<button type='submit' name='delete'>
		delete
	</button>


</form>
<?php } else { ?>

	<h1>No game found.</h1>

	<p> Check the list for more games <a href="?pages=list">here</a></p>

<?php } ?>