
<?php 
$heading =  $section['heading'] ??  'Hello and welcome to my area.'; 

$paragraph  = $section['description'] ?? 'Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Ab impedit debitis labore similique distinctio, eligendi quisquam non velit quasi, sint at a nihil, laboriosam ducimus numquam eaque perspiciatis illum odio?';

?>

<section class="generic-text">
	<inner-column>
		<h2>
			<?= $heading ?>
				
		</h2>
		<p>
			<?= $paragraph ?>
		</p>
	</inner-column>
</section>