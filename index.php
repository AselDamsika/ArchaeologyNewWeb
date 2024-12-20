<?php
$pageId = "home";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Department of Archaeology</title>
	
	<?php require_once "assets/header.php"; ?>

	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/index.css" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


	<style>

		body {
            font-family: "Book Antiqua", Palatino, "Palatino Linotype", serif;
        }

		.carousel-caption {
			background-color: rgba(0, 0, 0, 0.5);
			display: flex;
			justify-content: center;
			color: white;
			font-family: "Roboto Condensed", sans-serif;
			padding: 20px 0px 50px 0px;
			letter-spacing: 20px;
		}

		.carousel-control-next-icon,
		.carousel-control-prev-icon {
			width: 5rem;
			height: 4rem;
		}

		.carousel-item {
			transition: transform 0.1s step-start;
		}

		.carousel-indicators {
			bottom: 30px;
			display: block;
		}

		.count-box {
			background-color: #F0F8FF;
			margin: 5% 0;
			padding: 20px;
			box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
		}

		.count-box h1,
		.count-box span {
			font-size: 6rem;
			color: #1b98e5;
			font-weight: 500;
		}

		.count-box p {
			font-size: 2.5rem;
			color: #003269 !important;
			font-weight: 400;
		}
		.count-img{
			width: 50px;
			height: 50px;
			margin: 5% 0;
		}

		.main-container {
			padding-left: 0;
			padding-right: 0;
		}

		.welcome-row {
			background-color: #fdfdfd;
			border: none;
			margin: 5% 0;
			padding-left: 2%;
			padding: 2%;
			text-align: justify;
			border-left: 4px solid #1B98E5;
		}

		.welcometo {
			font-size: 3rem;
			font-weight: 400;
			color: #003269 !important;
		}

		.welcomeheading {
			font-size: 5.5rem;
			margin: 2% 0;
			color: #1B98E5;
			line-height: 1.5;
			overflow: hidden;
			white-space: nowrap;
			animation: typing 3s steps(40, end), blink 0.7s step-end infinite;
		}

		.welcomeheading:hover {
			color: #0056b3;

		}

		@keyframes typing {
			from {
				width: 0;
			}

			to {
				width: 100%;
			}
		}

		.deptpara {
			font-size: 2.1rem;
			font-weight: 400;
			line-height: 1.5 !important;
			color: #505050 !important;

		}

		.dept-para-span {
			font-weight: 600;
		}
	</style>

</head>

<body>

	<!-- Image carousel slider -->
	<div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="3000">

		<ol class="carousel-indicators">
			<li data-target="#mySlider" data-slide-to="0" class="active"></li>
			<li data-target="#mySlider" data-slide-to="1"></li>
			<li data-target="#mySlider" data-slide-to="2"></li>
			<li data-target="#mySlider" data-slide-to="3"></li>
			<li data-target="#mySlider" data-slide-to="4"></li>
			<li data-target="#mySlider" data-slide-to="5"></li>
		</ol>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/data1/images/001new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:4rem">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/005new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:4rem">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/007new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:4rem">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/008new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:4rem">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/005.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:4rem">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/006new.jpg" alt="Department of Archaeology" class="d-block w-100">
				<div class="carousel-caption">
					<h1 style="font-weight: 400; font-size:4rem">Department of ARCHAEOLOGY</h1>
				</div>
			</div>

		</div>

		<a class="carousel-control-prev" href="#mySlider" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>

		</a>
		<a class="carousel-control-next" href="#mySlider" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>

		</a>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<!-- Counting -->
	<div class="container mt-5">


		<div class="row">
			<div class="col-md-4 text-center">
				<div class="count-box">
					<img src="assets/data1/images/student.png" alt="" class="count-img">
					<p>Students</p>
					<h1> <span id="student-count" class="display-4">75</span>+</h1>
				</div>
			</div>


			<div class="col-md-4 text-center">
				<div class="count-box">
					<img src="assets/data1/images/degree.png" alt="" class="count-img">
					<p>Academic Programme</p>
					<h1 id="program-count" class="display-4">1</h1>
				</div>
			</div>

			<div class="col-md-4 text-center">
				<div class="count-box">
					<img src="assets/data1/images/staff.png" alt="" class="count-img">
					<p>Academic Staff</p>
					<h1><span id="teacher-count" class="display-4">9</span>+</h1>
				</div>
			</div>
		</div>
	</div>

	<script>
		function animateCount(id, start, end, duration) {
			const element = document.getElementById(id);
			let startTime = null;

			function update(timestamp) {
				if (!startTime) startTime = timestamp;
				const progress = timestamp - startTime;
				const current = Math.min(Math.floor((progress / duration) * (end - start) + start), end);
				element.innerText = current;
				if (current < end) {
					window.requestAnimationFrame(update);
				}
			}

			window.requestAnimationFrame(update);
		}

		function startCounting(entries, observer) {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					animateCount('program-count', 0, 1, 10);
					animateCount('student-count', 0, 75, 1000);
					animateCount('teacher-count', 0, 9, 1000);
					observer.unobserve(entry.target);
				}
			});
		}


		document.addEventListener('DOMContentLoaded', function() {
			const options = {
				threshold: 0.5
			};

			const observer = new IntersectionObserver(startCounting, options);
			const target = document.querySelector('.count-box');
			observer.observe(target);
		});
	</script>


	<div class="frontHolder">
		<div class="container main-container">



			<div class="row welcome-row">
					<p class="welcometo">Welcome to,</p>
					<h1 class="welcomeheading">Department of Archaeology</h1>
					<p class="deptpara">The <span class="dept-para-span">Department of Archaeology</span>, University of Peradeniya was established as a separate Department in 1976,
						is one of the largest Departments in the university system of Sri Lanka. At present, over one hundred
						undergraduates are following the Special and General Degree courses in Sinhala and English media at the
						Department. The teaching of archaeology at Peradeniya, was originally introduced as an auxiliary subject
						to history, as a sub-department, for the purpose of training future archaeological officers required by
						the state. In 1957, Dr. Senarat Paranavitana on his retirement from the post of Commissioner of
						Archaeology was appointed as the Professor of Archaeology, which marked the official beginning of the
						Department of Archaeology, University of Peradeniya. The notable archaeologists, namely, Prof Senarat
						Paranavitana, Prof. P.L. Prematilleke and Prof. Sudharshan Seneviratne have served in the Department.</p>
				
			</div>


			<div class="row">
				<div class="col-md-12 noticeBoard" style="font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif;">
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

					<h4><i class="fa fa-tags"></i>Rambewa Kadahatha Aloka Pabbatha Vihara Excavation conducted by the Department of Archaeology and Heritage Management, Rajarata University of Sri Lanka.</h4>
					<video width="320" height="240" controls>
						<source src="videos/Department of Archaeology Rambewa Excavation.mp4" type="video/mp4">
					</video>
					<hr />
				</div>
			</div>

		</div>
	</div>

	<?php require_once "assets/footer.php" ?>
</body>

</html>