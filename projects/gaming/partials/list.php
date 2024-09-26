<?php include('game-data.php'); ?>

<h1>Latest Arrivals</h1>

<ul>

	<?php foreach ($game_data as $game) { ?>

		<?php 
			$price = "$" . number_format($game["price"], 2 , ".", ",")
		 ?>

		<li class='game'>
			<game-card>
				<h2 class="name"><?=$game["name"]?></h2>
				<h3 class="year"><?=$game["year"]?></h3>
				<h4 class="console">For Console: <?=$game["console"]?></h4>
				<h5 class="price">Price: <?=$price?></h5>
				<a href="?page=detail&game=<?=$game['id']?>">Purchase Now.</a>
			</game-card>
		</li>

	<?php } ?>
</ul>