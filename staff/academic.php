<?php
$pageId = "staff";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Department of Archaeology - Academic Staff</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<?php require_once "../assets/header.php"; ?>

	<style>
		body {
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif;
		}

		.container {
			margin-top: 0 !important;
		}

		.tab-pane {
			padding: 0 !important;
		}

		.nav-tabs {
			border-bottom: none;
		}

		.nav-tabs .nav-item.show .nav-link,
		.nav-tabs .nav-link.active {
			margin: 0 !important;
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif !important;
		}

		.profile-item {
			border: 1px solid #e0e0e0;
			border-radius: 8px;
			overflow: hidden;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			margin-bottom: 20px;
			padding: 20px;
			background-color: #f9f9f9;
		}

		.profile-item:hover {
			transform: scale(1.02);
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
			background-color: #fff;
		}

		
		.profile-item img {
			width: 150px;
			height: 150px;
			object-fit: cover;
			border-radius: 50%;
			margin-bottom: 15px;
		}

		.profile-description h4 {
			font-size: 2.5rem;
			font-weight: bold;
		}

		.profile-description h5 {
			font-size: 1.8rem;
			color: #555;
		}

		.profile-description blockquote {
			font-size: 1.4rem;
			color: #777;
			border-left: 3px solid #1b98e5;
			padding-left: 10px;
		}

		.profile-description p {
			font-size: 1.4rem;
			line-height: 1.5;
		}

		.profile-grid {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
			grid-gap: 20px;
			margin-top: 30px;
		}

		.title-row {
			text-align: left;
			align-items: center;
			margin: 0 2px 20px 2px;
			background-color: #F0F8FF;
			padding: 10px;
			border-radius: 8px;
			color: #1b98e5;
		}

		.title-row:hover {
			background-color: #E0F0FF;

		}

		.nav-tabs .nav-item.show .nav-link,
		.nav-tabs .nav-link.active {
			margin: 0 !important;
			color: #1b98e5;
			background-color: #F0F8FF;
			border-color: white;
			padding: 10px;
			font-size: 2rem;
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif !important;
			font-weight: 500;
		}

		[type=button]:not(:disabled),
		[type=reset]:not(:disabled),
		[type=submit]:not(:disabled),
		.nav-item button:not(:disabled) {
			margin: 0 !important;
			padding: 0px;
			font-size: 2rem;
			color: #505050;
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif !important;
			font-weight: 500;
		}

		.nav-tabs .nav-link:focus,
		.nav-tabs .nav-link:hover {
			margin: 0 !important;
			isolation: isolate;
			border-color: var(--bs-nav-tabs-link-hover-border-color);
			padding: 10px;
			font-size: 2rem;
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', serif !important;
			font-weight: 500;
		}

		.tab-pane {
			padding: 20px;
			background-color: white;
			border: none;
		}

		.fade {
			opacity: 100;
		}

		.text-center {
			color: #1b98e5;
			font-size: 3.5rem;
		}

		.aced-hr {
			border: solid 2px #1b98e5;
			margin: 2% 0;
		}

		.academic-title {
			font-size: 4rem;
			font-weight: 400;
			color: #003269 !important;
			margin-top: 0 !important;
		}

		.profile-item a {
			color: #1b98e5;
		}

		.profile-item a:hover {
			color: #1684CC;
		}

		@media (max-width: 992px) {
			.nav-tabs {
				flex-wrap: wrap;
				justify-content: center;
			}
		}

		@media (max-width: 576px) {
			.academic-title {
				font-size: 3rem !important;
			}

			.nav-link {
				font-size: 1.8rem !important;
				padding: 10px !important;
			}

		}

		@media (max-width: 450px) {
			.academic-title {
				font-size: 2.5rem !important;
			}

			.nav-link {
				font-size: 1.6rem !important;

			}
		}
	</style>
</head>

<body>
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="../index.php">Home</a></li>
			<li class="active">Staff</li>
			<li class="active">Academic</li>
		</ol>
		<div>
			<h3 class="academic-title">Academic Staff</h3>
			<hr class="aced-hr" />

			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Permanant Academic Staff</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Temporary Academic Staff</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Emeritus Professors</button>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="profile-grid">
						<div class="profile-item text-center">
							<img src="../assets/images/academic/chandranew.jpg" alt="Prof. R.M.M. Chandraratne" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rmm.php">Prof. R.M.M. Chandraratne</a></h4>
								<h5>Professor, Department of Archaeology</h5>
								<blockquote>
									<em>BA (Hons) (Perad), MA (Poona), Ph.D. (Pune), FSLCA</em>
								</blockquote>
								<p>
									<span class="fa fa-envelope-o"></span>
									<a href="mailto:m.chandraratne@arts.pdn.ac.lk">m.chandraratne@arts.pdn.ac.lk</a><br><br>
									<span class="fa fa-phone"></span> +94 0812392583
								</p>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/proframbukwella.jpg" alt="Prof. Chulani Rambukwella" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rambukwella.php">Prof. Chulani Rambukwella</a></h4>
								<h5>Chair Professor of Archaeology</h5>
								<blockquote>
									<em>Phd (UK), MA (Peradeniya), BA (Peradeniya)</em>
								</blockquote>
								<p>
									<span class="fa fa-envelope-o"></span>
									<a href="mailto:m.chandraratne@arts.pdn.ac.lk">chulanimw@gmail.com</a><br><br>
									<span class="fa fa-phone"></span> +94 0812392583
								</p>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/ast.png" alt="Dr. A.S.T. Rajapakse" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="ast.php">Dr. A.S.T. Rajapakse</a></h4>
								<h5>Senior Lecturer</h5>
								<blockquote>
									<em>B.A. (Peradeniya),P.G. Dip.(IHS, Netherlands), M.A. (I.P. University), Ph.D. (Peradeniya)</em>
								</blockquote>
								<p>
									<span class="fa fa-envelope-o"></span>
									<a href="mailto:m.chandraratne@arts.pdn.ac.lk">tsaru2003@yahoo.com</a><br><br>
									<span class="fa fa-phone"></span> +94 71 4395277
								</p>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/sandya.png" alt="Ms. K.G.A.M. Sandya Kumari Nawarathna Menike" width="180" height="250">
							<div class="profile-description">
								<h4><a href="sandya.php">Ms. K.G.A.M. Sandya Kumari Nawarathna Menike</a></h4>
								<h5>Lecturer</h5>
								<blockquote>
									<em>BA(Hons)Peradeniya, MSc(PGIAR), Ph.D.Reading(PGIAR) MSLCA</em>
								</blockquote>
								<p>
									<span class="fa fa-envelope-o"></span>
									<a href="mailto:m.chandraratne@arts.pdn.ac.lk">sannawarathna@gmail.com</a><br><br>
									<span class="fa fa-phone"></span> +94 714 823 384
								</p>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/uditha.jpg" alt="Dr. Uditha Jinadasa" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="uditha.php">Dr. Uditha Jinadasa</a></h4>
								<h5>Lecturer</h5>
								<blockquote>
									<em>BA & MSc in Geo-Informatics (Peradeniya), PhD (Leiden)</em>
								</blockquote>
								<p>
									<span class="fa fa-envelope-o"></span>
									<a href="mailto:m.chandraratne@arts.pdn.ac.lk">ujinadasa@pdn.ac.lk</a><br><br>
									<span class="fa fa-phone"></span> +94 71 497 0718
								</p>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/piyumi.png" alt="Ms. Piyumi Embuldeniya" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="piyumi.php">Ms. Piyumi Embuldeniya</a></h4>
								<h5>Lecturer (Probationary)</h5>
								<blockquote>
									<em>MSSc. (Kelaniya), PGDip. in Museology (PGIAR, Kelaniya), B.A. (Kelaniya)</em>
								</blockquote>
								<p>
									<span class="fa fa-envelope-o"></span>
									<a href="mailto:m.chandraratne@arts.pdn.ac.lk">piyumie@arts.pdn.ac.lk</a><br><br>
									<span class="fa fa-phone"></span> +94 772383788
								</p>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/buddi.jpg" alt="Mr. Buddhisha Weerasuriya" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="buddisha.php">Mr. Buddhisha Weerasuriya</a></h4>
								<h5>Lecturer (Probationary)</h5>
								<blockquote>
									<em>M.Phil (Peradeniya) - Reading, B.A (Hons) (Peradeniya)</em>
								</blockquote>
								<p>
									<span class="fa fa-envelope-o"></span>
									<a href="mailto:m.chandraratne@arts.pdn.ac.lk">buddisha@arts.pdn.ac.lk</a><br><br>
									<span class="fa fa-phone"></span> +94 71 5206865
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="profile-grid">
						<div class="profile-item text-center">
							<img src="../assets/images/academic/senarat.jpg" alt="Prof. Senarat Paranavitana" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rmm.php">Prof. Senarat Paranavitana</a></h4>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/UnknownProfile.png" alt="Prof. P.L. Prematilleke" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rmm.php">Prof. P.L. Prematilleke</a></h4>

							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/seneviratna.jpg" alt="Prof. S.D.S. Seneviratne" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rmm.php">Prof. S.D.S. Seneviratne</a></h4>

							</div>
						</div>
					</div>
				</div>


				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="profile-grid">
						<div class="profile-item text-center">
							<img src="../assets/images/academic/senarat.jpg" alt="Prof. Senarat Paranavitana" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rmm.php">Prof. Senarat Paranavitana</a></h4>
							</div>
						</div>

						<div class="profile-item text-center">
							<img src="../assets/images/academic/UnknownProfile.png" alt="Prof. P.L. Prematilleke" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rmm.php">Prof. P.L. Prematilleke</a></h4>

							</div>
						</div>


						<div class="profile-item text-center">
							<img src="../assets/images/academic/seneviratna.jpg" alt="Prof. S.D.S. Seneviratne" width="180" height="180" class="img-fluid">
							<div class="profile-description">
								<h4><a href="rmm.php">Prof. S.D.S. Seneviratne</a></h4>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<?php require_once "../assets/footer.php" ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>