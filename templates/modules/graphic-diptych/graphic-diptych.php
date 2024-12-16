<?php 

$paragraph  = 'Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Ab impedit debitis labore similique distinctio, eligendi quisquam non velit quasi, sint at a nihil, laboriosam ducimus numquam eaque perspiciatis illum odio?';

$image = 'square.jpg';

?>

<section class="graphic-diptych">
	<inner-column>
		
		<picture>
			<img src="images/<?= $image ?> " alt="">
		</picture>

		<p>
			<?= $paragraph ?>
		</p>
	</inner-column>
</section>