<!doctype html>

<html lang='en'>
	
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Mohammed Shaik</title>
		
		<meta name='description' content= 'Hello. Welcome to my website. I am here for your Web-Goals.' >

		<meta property='og:image' content='../images/meta-image.png'>

		<link rel="stylesheet" href='../styles/style.css'>

	</head>


	<body>
		
		<?php 
			include '../partials/header.php'
		 ?>

		<main>

			<section class="projects-intro">
				<div class="inner-column">
					<h2 class='loud-voice'>Projects</h2>
					<p>Here you will find the projects I have handelled. Kindly click on the links below. </p>
				</div>
			</section>



			<section class='projects-section'>
				<div class="inner-column">
					<nav>
						<ul>
							<li>
								<div class='link-container'>
									<a href="layout-garden/index.html"

									class='calm-voice'

									> 
								Layout Garden
							</a>
								</div>

								<?php include '../partials/project-boxes.php' ?>


							</li>

							<li>
								<div class='link-container'>
									<a href="mock-site/index.html" class='calm-voice'>
										First mock site
									</a>
								</div>
									<?php include '../partials/project-boxes.php' ?>
							</li>

							<li>
								<div class='link-container'>
									<a href="portal/index.html" class='calm-voice'> 
										My Portal
									</a>
								</div>
									<?php include '../partials/project-boxes.php' ?>
							</li>

							<li>
								<div class='link-container'>
									<a href="e4p/index.php" class='calm-voice'> 
										Exercises for programmers
									</a>
								</div>
									<?php include '../partials/project-boxes.php' ?>
							</li>




						</ul>
					</nav>	

				</div>

			</section>
			



			<section class="links-section">
				<div class="inner-column">
					<nav>
						<ul>
							<li>
								<a href="../resume/index.php" class="notice-voice">
									Resume
								</a>
							</li>

							<li>
								<a href="../goals/index.php" class="notice-voice">
									Goals
								</a>
							</li>

							<li>
								<a href="../index.php" class="notice-voice" >Home</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>	
			
		

		</main>

		<?php 
			include '../partials/footer.php'
		 ?>




	</body>



</html>