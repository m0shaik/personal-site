<?php 


$projects = getJsonData("projects.json");

 ?>



<section class="project-list">
	<inner-column>



		<ul>

<?php foreach($projects as $project) { 

	$projectHead = $project['heading'] ?? 'Project Heading';

	$projectImage = $project['image'] ?? 'square.jpg';

	$projectDescription = $project['description'] ?? 'This is project description';

	$projectLink = $project['link'] ?? '#';

	include 'templates/components/project-card/project-card.php';

 } ?>
		</ul>
	</inner-column>
</section>