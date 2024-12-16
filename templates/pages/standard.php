
<?php 

	$pageName = getPage();

	$pageData = getJsonData("pages/$pageName.json");

	$sections = $pageData['sections'];

?>


<?php include('templates/modules/header/header.php'); ?>





	<main>

		<h2><?= $pageData['title'] ?></h2>

		<?php foreach($sections as $section) { 


		$module = $section['module'];

		include "templates/modules/$module/$module.php";
		

		 } ?>






	</main>

<?php //include('templates/modules/footer/footer.php'); ?>