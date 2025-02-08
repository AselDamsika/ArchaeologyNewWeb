<?php
$pageId = "cnt";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Department of Archaeology</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		body {
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif;
		}

		.contact-container {
			margin-bottom: 50px;
		}

		.contact-heading {
			font-size: 4rem;
			font-weight: 400;
			color: #003269;
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif;
			padding-left: 0 !important;
			padding-right: 0 !important;
		}

		.contact-hr {
			border: solid 2px #007bff;
		}

		.contact-row{
			display: flex;
			align-items: center;
			text-align: center;
		}

		.contact-box {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background-color: #F0F8FF;
			margin: 5% 0;
			padding: 20px;
			box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
			height: 250px;
		}

		.contact-title {
			font-size: 3rem;
			color: #003269;
			font-weight: 600;
			text-align: center;
			margin: 20px 0;
		}

		.contact-box span {
			color: #1b98e5;
			font-weight: 500;
			text-align: left;
		}

		.contact-box p {
			color: #505050 !important;
			font-size: 1.7rem;
			font-weight: 400;
			text-align: left;
		}
		.contact-box a {
			color: #505050 !important;
			text-align: left;
		}
		.contact-box a:hover {
			color:rgb(133, 133, 133) !important;
		}

		.contact-img {
			width: 50px;
			height: 50px;
		}

		@media (max-width: 991px) {
			.contact-box p{
				font-size: 1.5rem;
			}
		}
		@media (max-width: 767px) {
			.contact-title{
				font-size: 2.5rem;
			}
			.contact-box p{
				font-size: 1.4rem;
			}
			.contact-img {
				width: 40px;
				height: 40px;
			}
		}
		@media (max-width: 576px) {
			.contact-heading{
				font-size: 3rem;
			}
		}
		@media (max-width: 450px) {
		    .contact-heading{
				font-size: 2.5rem;
			}
		}

	</style>
</head>

<body>

	<?php require_once "assets/header.php"; ?>

	<div class="container contact-container">
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contacts</li>
		</ol>

		<div>
			<h2 class="contact-heading">Contact Us</h2>
			<hr class="contact-hr" />


			<div class="row contact-row">
				<div class="col-md-6" >
					<div class="contact-box">
						<img src="assets/data1/images/location.png" alt="" class="contact-img">
						<h3 class="contact-title">Postal Address</h3>
						<p>
							Department of Archaeology<br>
							Faculty of Arts<br>
							University of Peradeniya<br>
							Peradeniya 20400<br>
							Sri Lanka
						</p>
					</div>

				</div>

				<div class="col-md-6" >
					<div class="contact-box">
						<img src="assets/data1/images/web.png" alt="" class="contact-img">
						<h3 class="contact-title">Online</h3>
						<p>
							<span class="span-title">Email : </span><a href="mailto:arch.dip.peradeniya@gmail.com">arch.dip.peradeniya@gmail.com</a></br>
							<span class="span-title">Web : </span><a href="https://arts.pdn.ac.lk/archaeologynew/" target="_blank">arts.pdn.ac.lk/archaeologynew</a></br>
							<span class="span-title">Facebook : </span><a href="https://www.facebook.com/profile.php?id=100086379914591" target="_blank">Facebook Page</a></br>
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php require_once "assets/footer.php" ?>
</body>

</html>