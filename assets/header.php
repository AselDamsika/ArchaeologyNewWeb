<?php $root = "/archaeologynewweb"; ?>

<?php
if (!isset($pageId)) {
	$pageId = null;
}
?>

<head>
	<meta name="description" content="The Department of Geography is one of the reputed departments in the Faculty of Arts, University of Peradeniya, Sri Lanka which was established in 1952." />
	<meta name="author" content="root" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">


	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>/assets/images/logo.png" />
	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/bootstrap.css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/custom.css" />
	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/header.css" />
	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/lightbox.css" />
	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/profile_style.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo $root; ?>/assets/engine1/style.css" />

	<style>
		.navbar-nav li.dropdown:hover>.dropdown-menu {
			display: block;
			visibility: visible;
			transition: all 0.3s ease;
		}

		.navbar-nav .dropdown-menu {
			background-color: white !important;
			transition: all 0.3s ease;
		}

		.navbar-nav .dropdown-menu>li {
			color: #003269;
			background-color: white !important;
			font-size: 1.6rem;
		}

		.navbar-nav .dropdown-menu>li>a {
			color: #003269;
			background-color: white !important;
			font-size: 1.6rem;
		}

		.navbar-nav .dropdown-menu>li>a:hover {
			color: #003269;
			background-color: rgba(0, 50, 105, 0.2);
		}

		.bg-light {
			--bs-bg-opacity: 1;
			background-color: #1b98e5 !important;
		}

		.navbar-nav>li>a {
			color: white;
			font-size: 1.8rem;
		}

		.nav>li>a:hover,
		.nav>li>a:focus,
		.nav>li>a:active {
			text-decoration: none;
			background-color: rgba(0, 50, 105, 0.2) !important;
			color: white;
		}

		.navbar-nav>li>a {
			padding: 20px;
		}

		.navbar-header .navbar-brand {
			color: #333;
		}

		.dropdown-menu {
			border: #003269;
		}

		.dropdown-menu>li {
			margin: 0 !important;
		}

		.dropdown-menu>li>a:focus {
			background-color: #f5f5f5;
			box-shadow: inset 200px 0 0 0 white;
		}

		.dropdown-menu>li>a:hover {
			box-shadow: inset 250px 0 0 0 #f5f5f5;
		}

		.main-row {
			display: flex;
			justify-content: space-between;
		}

		.logocol {
			margin: 0;
			padding: 0;
			display: flex;
			align-items: center;
			justify-content: left;
		}

		.logoimg {
			margin: 0;
			padding: 0;
			width: 90px;
		}

		.deptcol {
			padding: 0;
			margin: 0;
			display: flex;
			flex-direction: column;
			padding: 10px 5px;
		}

		.deptname {
			font-weight: bold;
			font-size: 3.5rem;
			margin: 0;
		}

		.uniname {
			font-weight: normal;
			font-size: 2rem;
		}

		.searchcol {
			padding: 0;
			margin: 0;
			align-items: center;
			justify-content: left;
		}

		.search-btn {
			background-color: #1b98e5;
			color: white;
			border: none;
		}

		.search-btn:hover {
			background-color: #1684CC;
		}
	</style>

</head>

<body>

	<header style="background: #003269; padding: 10px;">
		<div class="container">
			<div class="row main-row">
				<div class="col-md-1 logocol">
					<img src="<?php echo $root; ?>/assets/images/logo.png" alt="Pdn_Logo" class="logoimg">
				</div>
				<div class="col-md-7 deptcol">
					<h2 class="deptname">Department of Archaeology</h2>
					<h4 class="uniname"> University of Peradeniya</h4>
				</div>

				<div class="col-md-4 searchcol">
					<form method="GET" action="search_results.php" class="search-form d-flex">
						<input type="text" class="form-control me-2" name="query" id="query" placeholder="Search Archaeology" aria-label="Search Archaeology">
						<button class="btn btn-primary search-btn">
							<i class="bi bi-search"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</header>

	<script>
		function searchGeo() {
			window.open('https://www.google.com/search?q=site:arts.pdn.ac.lk/archaeologynewweb+' + document.getElementById('query').value, '_blank');
		}
	</script>



	<!-- Navbar -->
	<nav class="navbar-expand-lg navbar-light bg-light">
		<div class="container" style="padding: 0;">

			<div class="navbar-header">
				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> -->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

					<li class="<?php if ($pageId == 'home') {
									echo "nav-item active";
								} ?>"><a href="<?php echo $root; ?>/">Home <span class="sr-only">(current)</span></a></li>

					<li class="<?php if ($pageId == 'about') {
									echo "nav-item active";
								} ?>"><a href="<?php echo $root; ?>/about.php">About</a></li>

					<li class="dropdown <?php if ($pageId == 'ac') {
											echo "nav-item active";
										} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programs</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $root; ?>/ac/under.php">Undergraduate </a></li>
							<li role="separator" class="divider"></li>
							<li><a href="http://www.pgihs.lk/">Postgraduate </a></li>
						</ul>
					</li>

					<li class="dropdown <?php if ($pageId == 'staff') {
											echo "nav-item active";
										} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $root; ?>/staff/academic.php">Academic Staff</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo $root; ?>/staff/nonacademic.php">Non-Academic Staff</a></li>
						</ul>
					</li>

					<li class="<?php if ($pageId == 'res') {
									echo "nav-item active";
								} ?>"><a href="<?php echo $root; ?>/#">Research &amp; Publications</a></li>

					<li class="<?php if ($pageId == 'res') {
									echo "nav-item active";
								} ?>"><a href="<?php echo $root; ?>/#">Downloads</a></li>

					<li class="<?php if ($pageId == 'cnt') {
									echo "nav-item active";
								} ?>"><a href="<?php echo $root; ?>/contact.php">Contacts</a></li>



				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>