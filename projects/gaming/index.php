

<?php
include('functions.php');


	$page = getPage();
?>
<!doctype html>

<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gaming Store</title>
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>
		<div class="inner-column">
			<header>
				<?php include('partials/site-menu.php'); ?>
			</header>

			<main class='page-content'>
				<?php
				if ($page == "home") {
					include('partials/home.php');
				}

				if ($page == "list") {
					include('partials/list.php');
				}

				if ($page == "detail") {
					include('partials/detail.php');
				}

				if ($page == "create") {
					include('partials/create.php');
				}

			?>
			</main>

		</div>


	</body>

</html>