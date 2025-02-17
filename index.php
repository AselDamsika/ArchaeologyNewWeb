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
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif;
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

		.dept-name {
			font-weight: 400;
			font-size: 4rem
		}

		.count-row {
			justify-content: center;
		}

		.count-box {
			background-color: #F0F8FF;
			margin: 5% 0;
			padding: 20px;
			box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
			height: 300px;
			align-items: center;
			justify-content: center;
			display: flex;
			flex-direction: column;
		}

		.count-box:hover {
			box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
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

		.count-img {
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

		.news-events-row {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin: 5% 0;
		}

		.newsevents {
			color: #003269;
		}

		.news-events-col {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 20px 0;
			padding: 2%;
			border: 1px solid #1B98E5;
			border-radius: 5px;
			box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
		}

		.news-events-col:hover {
			box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
		}

		.news-video {
			width: 100%;
			height: 80%;
			margin-top: 20px;
		}

		.news-events-col h5 {
			color: #505050;
			font-weight: 600;
		}


		@media (max-width: 991px) {
			.dept-name {
				font-size: 3rem
			}

			.count-box {
				height: 250px;
			}

			.count-box h1,
			.count-box span {
				font-size: 5rem;
			}

			.count-box p {
				font-size: 2rem;
			}

			.welcometo {
				font-size: 2.5rem;
			}

			.welcomeheading {
				font-size: 4rem;
			}

			.deptpara {
				font-size: 1.8rem;
			}

			.news-events-col {
				width: 100%;
			}

			.news-video {
				height: 300px;
			}
		}

		@media (max-width: 767px) {
			.dept-name {
				font-size: 2.5rem
			}

			.count-box {
				height: 200px;
			}

			.deptpara {
				font-size: 1.5rem;
			}
		}

		@media (max-width: 767px) {
			.dept-name {
				font-size: 2rem
			}
		}

		@media (max-width: 575px) {
			.dept-name {
				font-size: 1.5rem
			}

			.carousel-caption {
				padding: 20px 0px 20px 0px;
				letter-spacing: 10px;
			}

			.carousel-indicators {
				display: none;
			}

			.carousel-img {
				height: 200px;
			}

			.carousel-control-next-icon,
			.carousel-control-prev-icon {
				width: 3rem;
				height: 2rem;
			}

			.count-box {
				height: 200px;
				margin: 2% 0;

			}

			.count-box h1,
			.count-box span {
				font-size: 4rem;
			}

			.count-img {
				width: 40px;
				height: 40px;
			}

			.welcometo {
				font-size: 1.8rem;
			}

			.welcomeheading {
				font-size: 2.8rem;
			}

			.deptpara {
				font-size: 1.4rem;
			}

			.news-events-col {
				width: 100%;
			}

			.news-video {
				height: 200px;
			}
		}

		@media (max-width: 450px) {
			.welcomeheading {
				font-size: 2.5rem;
			}
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
				<img src="assets/data1/images/001new.jpg" alt="Department of Archaeology" class="d-block w-100 carousel-img">
				<div class="carousel-caption">
					<h1 class="dept-name">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/005new.jpg" alt="Department of Archaeology" class="d-block w-100 carousel-img">
				<div class="carousel-caption">
					<h1 class="dept-name">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/007new.jpg" alt="Department of Archaeology" class="d-block w-100 carousel-img">
				<div class="carousel-caption">
					<h1 class="dept-name">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/008new.jpg" alt="Department of Archaeology" class="d-block w-100 carousel-img">
				<div class="carousel-caption">
					<h1 class="dept-name">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/005.jpg" alt="Department of Archaeology" class="d-block w-100 carousel-img">
				<div class="carousel-caption">
					<h1 class="dept-name">Department of ARCHAEOLOGY</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/data1/images/006new.jpg" alt="Department of Archaeology" class="d-block w-100 carousel-img">
				<div class="carousel-caption">
					<h1 class="dept-name">Department of ARCHAEOLOGY</h1>
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


		<div class="row count-row">
			<div class="col-md-4 col-sm-6 text-center">
				<div class="count-box">
					<img src="assets/data1/images/student.png" alt="" class="count-img">
					<p>Students</p>
					<h1> <span id="student-count" class="display-4">75</span>+</h1>
				</div>
			</div>


			<div class="col-md-4 col-sm-6 text-center">
				<div class="count-box">
					<img src="assets/data1/images/degree.png" alt="" class="count-img">
					<p>Academic Programme</p>
					<h1 id="program-count" class="display-4">1</h1>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 text-center">
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
				<p class="deptpara">The <span class="dept-para-span">Department of Archaeology</span>,
					at the University of Peradeniya has a distinguished history that reflects the growth and development of archaeology as an academic discipline in Sri Lanka. Established in 1959, the Department was initially a sub-department under the Department of History, with Professor Senarat Paranavitana serving as its first Professor and Head. This initiative was designed to train future archaeological officers for the state, providing a crucial foundation for the discipline in Sri Lanka.
					In its early years, the Department collaborated closely with the government’s Archaeological Department, leveraging its fieldwork expertise, technical resources, and staff. The Department introduced courses focused on the Archaeology of Ceylon, while also offering a broader academic perspective on Art and Antiquities. Undergraduate teaching initially emphasized subjects such as History and Pali & Buddhist Civilization, with the addition of a subsidiary course in the Elements of Archaeology.
					The Department’s early successes were marked by the completion of the first Master of Arts degrees by students A. Ariyasinghe and N. Mudiyanse, who were the first to successfully complete the MA in 1961. This milestone laid the groundwork for further development and expansion in the years that followed. <br> <br>

					Recognizing the need for more specialized and comprehensive education in archaeology, Dr. Senarat Paranavitana stressed the importance of establishing a fully independent Department of Archaeology. His vision was supported in the 1958 report of the Needham Committee, which recommended the creation of a separate department. In response, the University expanded its offerings and began to include both theoretical and practical courses within the framework of classical South Asian archaeology.
					The establishment of the University’s first Archaeology Museum was another key development during this period. The museum, which featured collections from renowned archaeologists such as Biddel, Hettiaracchi, and De Saram, provided valuable resources for both academic study and public exhibition. Dr. Paranavitana and Dr. P.L. Prematilleke (who later became a Research Professor) played instrumental roles in curating these collections, which greatly enriched the Department’s academic environment.
					In 1976, the Department of Archaeology officially became an independent entity, offering Special Degree courses in archaeology for the first time. Dr. Prematilleke became the first Head of the newly formed Department, marking the beginning of a new era of growth and development. <br> <br>

					Throughout the 1980s, the Department expanded significantly, both in terms of its academic staff and its research activities. Scholars such as Dr. Sudharshan Seneviratne, Dr. W.H. Wijayapala, and Dr. Moira Tampoe, among others, were recruited to the staff, contributing to the Department’s growing academic reputation. The Department also introduced new courses to keep pace with international developments and national archaeological needs, while continuing to expand its research portfolio.
					As part of its academic and research initiatives, the Department has been involved in numerous high-profile archaeological projects, including collaborations with UNESCO and the Central Cultural Fund on excavations in Polonnaruwa, Kandy, and Anuradhapura. The Department also became a key partner in the Anuradhapura Citadel Archaeology Project and the Pinwewa-Galsohonkanatta Archaeology Project.
					Today, the Department of Archaeology at the University of Peradeniya is recognized as one of the largest and most prestigious archaeology departments in Sri Lanka’s higher education system. It continues to play a leading role in the education, research, and preservation of Sri Lanka’s cultural heritage, offering undergraduate and postgraduate programs that shape the future of archaeology in the country.

				</p>
			</div>


			<div class="row news-events-row">
				<h1 class="newsevents">News &amp; Events</h1>

				<div class="col-md-6 news-events-col">
					<h5>Old Money and Ancient Writing: Archaeology undergraduates visit the National Museum and (state) Department of Archaeology to study coins and inscriptions</h5>
					<h5><a href="videos/Study tour.pdf" target="_blank">More Info </a></h5>
					<video class="news-video" controls>
						<source src="videos/archaeology.mov" type="video/mp4">
					</video>
				</div>

				<div class="col-md-6 news-events-col">
					<h5>Maritime Archaeology Training Programme at the Maritime Archaeology Unit of the Central Cultural Fund in Galle.</h5>
					<video class="news-video" controls>
						<source src="videos/Department of Archaeology MAU Training,Galle.mp4" type="video/mp4">
					</video>
				</div>

				<div class="col-md-6 news-events-col">
					<h5>Rambewa Kadahatha Aloka Pabbatha Vihara Excavation conducted by the Department of Archaeology and Heritage Management, Rajarata University of Sri Lanka. </h5>
					<video class="news-video" controls>
						<source src="videos/Department of Archaeology Rambewa Excavation.mp4" type="video/mp4">
					</video>
				</div>


			</div>
		</div>
	</div>
	</div>

	<?php require_once "assets/footer.php" ?>
</body>

</html>