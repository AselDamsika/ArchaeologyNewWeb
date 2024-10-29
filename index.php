<?php
$pageId = "home";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Department of Archaeology</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

	<?php require_once "assets/header.php"; ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


	<style>
		.carousel-caption {
			background-color: rgba(0, 0, 0, 0.5);
			color: white;
			font-family: "Roboto Condensed", sans-serif;
			font-size: 4rem;
			padding-top: 20px;
			padding-bottom: 50px;
		}
	</style>

</head>

<body>


	<div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="3000">

		<ul class="carousel-indicators">
			<li data-target="#mySlider" data-slide-to="0" class="active"></li>
			<li data-target="#mySlider" data-slide-to="1"></li>
			<li data-target="#mySlider" data-slide-to="2"></li>
			<li data-target="#mySlider" data-slide-to="3"></li>
			<li data-target="#mySlider" data-slide-to="4"></li>
			<li data-target="#mySlider" data-slide-to="5"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/data1/images/001new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:3rem">Department of Archaeology</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/005new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:3rem">Department of Archaeology</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/007new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:3rem">Department of Archaeology</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/008new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:3rem">Department of Archaeology</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/005.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:3rem">Department of Archaeology</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/006new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:3rem">Department of Archaeology</h1>
				</div>
			</div>

		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#mySlider" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#mySlider" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>

	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



	<div class="frontHolder">
		<div class="container">
			<div class="row">
				<div class="col-md-8 welcomeNote">
					<h3><i class="fa fa-quote-left"></i> Welcome to the Department of Archaeology <i class="fa fa-quote-right"></i></h3>
					<hr />
					<blockquote>
						<p><span class="highlight">The Department of Archaeology, University of Peradeniya</span> was established as a separate Department in 1976, is one of the largest Departments in the university system of Sri Lanka. At present, over one hundred undergraduates are following the Special and General Degree courses in Sinhala and English media at the Department.

							The teaching of archaeology at Peradeniya, was originally introduced as an auxiliary subject to history, as a sub-department, for the purpose of training future archaeological officers required by the state. In 1957, Dr. Senarat Paranavitana on his retirement from the post of Commissioner of Archaeology was appointed as the Professor of Archaeology, which marked the official beginning of the Department of Archaeology, University of Peradeniya. The notable archaeologists, namely, Prof Senarat Paranavitana, Prof. P.L. Prematilleke and Prof. Sudharshan Seneviratne have served in the Department.
						</p>

						<hr />

						<!--<p>Among the pioneering sociologists associated with the Department were the <span class="highlight"><em>Prof.Bryce Ryan, Prof.Ralph Pieris, Prof.S.J. Tambiah, Prof. Gananath Obeyesekere, Prof.Laksiri Jayasuriya, Prof. Nur Yalman, Prof. E.R. Leach, Prof. H.L.Seneviratne and Prof. Kitsiri Malalgoda. Prof. K. Tudor Silva, Emeritus Prof. W. M. Sirisena</em> and <em>Prof. M. W. Amarasiri De Silva</em></span> another prominent members who have served in the Department in the recent past.</p>-->
					</blockquote>
				</div>

				<div class="col-md-4 noticeBoard">
					<h3>News &amp; Events</h3>
					<hr />


					<h4><i class="fa fa-tags"></i>Old Money and Ancient Writing: Archaeology undergraduates visit the National Museum and (state) Department of Archaeology to study coins and inscriptions</h4>
					<h5><a href="videos/Study tour.pdf" target="_blank">More Info </a></h5>
					<video width="320" height="240" controls>
						<source src="videos/archaeology.mov" type="video/mp4">
					</video>
					<hr />


					<h4><i class="fa fa-tags"></i>Maritime Archaeology Training Programme at the Maritime Archaeology Unit of the Central Cultural Fund in Galle.</h4>
					<video width="320" height="240" controls>
						<source src="videos/Department of Archaeology MAU Training,Galle.mp4" type="video/mp4">
					</video>
					<hr />

					<h4> <i class="fa fa-tags"></i> Rambewa Kadahatha Aloka Pabbatha Vihara Excavation conducted by the Department of Archaeology and Heritage Management, Rajarata University of Sri Lanka. </h4>
					<video width="320" height="240" controls>
						<source src="videos/Department of Archaeology Rambewa Excavation.mp4" type="video/mp4">
					</video>
					<hr />


					<!--<h4><i class="fa fa-tags"></i>International Conference on Social Work - Social Development and Sustainable Development Goals</h4>
                    <ul>
                    <li>International Conference on <strong>Social Work - Social Development and Sustainable Development Goals,</strong> will be held on 29<sup>th</sup> - 30<sup>th</sup> September 2016. The conference organized by International Consortium for Social Development, Asia Pacific Branch with the Department of Sociology, University of Peradeniya, Kandy, Sri Lanka & Charles Sturt University, Australia.</li>
                    <a href="events/conference.php">Learn More</a>
                  </ul>
                <hr />

                    <h4><i class="fa fa-tags"></i>  Sociology Day</h4>
                    <ul>
                    <li>The Sociology day organized by the Department of Sociology held on 8<sup>th</sup> of April, 2015 at the Department of Sociology, University of Peradeniya. Keynote speech by Prof. Gananath Obeysekara</li>
                    <a href="events/socday.php">Learn More</a>    
                    </ul>-->

				</div>
			</div>
		</div>
	</div>

	<?php require_once "assets/footer.php" ?>
</body>

</html>