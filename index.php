<!doctype html>

<html lang='en'>
	
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Mohammed Shaik</title>
		
		<meta name='description' content= 'Hello. Welcome to my website. I am here for your Web-Goals.' >

		<meta property='og:image' content='../images/meta-image.png'>

		<link rel="stylesheet" href='styles/style.css'>

	</head>


	<body>
		
		<?php 
			include 'partials/header.php'
		 ?>

		<main>

			<section class="greeting">

				<div class="inner-column">
				<h1 class="loud-voice">
					Mohammed Shaikh
				</h1>

				<h2 class="attention-voice">
					Web developer
				</h2>
				</div>

			</section>

			<section class='about-section'>
				<div class="inner-column">
					<p>
						Welcome to my portfolio. I am Mohammed Shaikh. 
						I am currently learning Web-developing, Graphic designing and Full-stack developing. 
					</p>

					<p>
						I am a good communicator. I work well both in teams and individually. 
					</p>

					<p>
						I like playing Football. I am a Foodie. I love travelling and discovering new places. 
					</p>
				</div>

			</section>

			<section class='projects-section'>
				<div class="inner-column">
					<nav>
						<ul>
							<li>
								<div class='link-container'>
									<a href="projects/layout-garden/index.html"

									class='calm-voice'

									> 
								Layout Garden
							</a>
								</div>

								<?php include 'partials/project-boxes.php' ?>


							</li>

							<li>
								<div class='link-container'>
									<a href="projects/mock-site/index.html" class='calm-voice'>
										First mock site
									</a>
								</div>
									<?php include 'partials/project-boxes.php' ?>
							</li>

							<li>
								<div class='link-container'>
									<a href="projects/portal/index.html" class='calm-voice'> 
										My Portal
									</a>
								</div>
									<?php include 'partials/project-boxes.php' ?>
							</li>
						</ul>
					</nav>	

				</div>

			</section>
			


			<section class='contact-section'>
				<div class="inner-column">
					<p class=''> 
						Feel free to get in touch.
					</p>
					<div class='email-container'>
						<a href="mailto:shaikm66@gmail.com" class='firm-voice'>
							shaikm66@gmail.com
						</a>
					</div>
				</div>

			</section>


			<section class="links-section">
				<div class="inner-column">
					<nav>
						<ul>
							<li>
								<a href="resume/index.php" class="notice-voice">
									Resume
								</a>
							</li>

							<li>
								<a href="goals/index.php" class="notice-voice">
									Goals
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>	
			
		

		</main>

		<?php 
			include 'partials/footer.php'
		 ?>




	</body>



</html>