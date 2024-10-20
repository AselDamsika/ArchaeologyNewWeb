<?php $root = "/archaeologynewweb"; ?>

<?php
if (!isset($pageId)) {
	$pageId = null;
}
?>


<meta name="description" content="The Department of Geography is one of the reputed departments in the Faculty of Arts, University of Peradeniya, Sri Lanka which was established in 1952." />
<meta name="author" content="root" />


<link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>/assets/images/logo.png" />
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/bootstrap.css" />
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/custom.css" />
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/header.css" />
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/lightbox.css" />
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/all.min.css" />
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/profile_style.css" />

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="<?php echo $root; ?>/assets/engine1/style.css" />
<!-- End WOWSlider.com HEAD section -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
	.navbar-nav li.dropdown:hover>.dropdown-menu {
		display: block;
		visibility: visible;
		opacity: 1;
		transition: all 0.3s ease;
	}

	.navbar-nav .dropdown-menu {
		background-color: #1b98e5;
		transition: all 0.3s ease;
	}

	.navbar-nav .dropdown-menu>li>a {
		color: white;
		font-size: 1.6rem;
	}

	.navbar-nav .dropdown-menu>li>a:hover {
		background-color: #1b98e5;
		color: white;
	}

	.bg-light {
		--bs-bg-opacity: 1;
		background-color: #1b98e5 !important;
		padding: 5px 0;
		margin-bottom: 20px;
	}

	.navbar-nav>li>a {
		color: white;
		font-size: 1.8rem;
	}

	.nav>li>a:hover,
	.nav>li>a:focus {
		text-decoration: none;
		background-color: #1b98e5;
	}

	.navbar-nav>li>a:hover {
		color: #003269;
	}

	.navbar-header .navbar-brand {
		color: #333;
	}
</style>

</head>

<body>

	<header style="background: #003269; padding: 10px;">
		<div class="container">
			<div class="row">
				<div class="col-md-2 logocol">
					<img src="<?php echo $root; ?>/assets/images/logo.png" alt="Pdn_Logo" class="logoimg">
				</div>
				<div class="col-md-6 deptcol">
					<h2 class="deptname">Department of Archaeology</h2>
					<h4 class="uniname"> University of Peradeniya</h4>
				</div>

				<div class="col-md-4 searchcol">
					<form method="GET" action="search_results.php" class="search-form d-flex">
						<label for="query" class="visually-hidden">Search Archaeology</label>
						<input type="text" class="form-control me-2" name="query" id="query" placeholder="Search Archaeology" aria-label="Search Archaeology">
						<button class="btn btn-primary" type="submit" aria-label="Search">
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
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

					<li class="<?php if ($pageId == 'home') {
									echo "active";
								} ?>"><a href="<?php echo $root; ?>/">Home <span class="sr-only">(current)</span></a></li>

					<li class="<?php if ($pageId == 'about') {
									echo "active";
								} ?>"><a href="<?php echo $root; ?>/about.php">About</a></li>

					<li class="dropdown <?php if ($pageId == 'ac') {
											echo "active";
										} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programmes</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $root; ?>/ac/under.php">Undergraduate </a></li>
							<li role="separator" class="divider"></li>
							<!--<li><a href="<?php echo $root; ?>/ac/post.php">Postgraduate </a></li>-->
							<li><a href="http://www.pgihs.lk/">Postgraduate </a></li>
						</ul>
					</li>

					<li class="dropdown <?php if ($pageId == 'staff') {
											echo "active";
										} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $root; ?>/staff/academic.php">Academic Staff</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo $root; ?>/staff/nonacademic.php">Non-Academic Staff</a></li>
						</ul>
					</li>

					<!-- <li class="dropdown <?php if ($pageId == 'event') {
													echo "active";
												} ?>">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
              <li class="<?php if ($pageId == 'faci') {
								echo "active";
							} ?>"><a href="<?php echo $root; ?>/facilities.php">Facilities</a></li>
	          <!-- <ul class="dropdown-menu">
              	<li><a href="<?php echo $root; ?>/events/conference.php">International Conference</a></li>
                <li role="separator" class="divider"></li>
	            <li><a href="<?php echo $root; ?>/events/socday.php">Sociology Day</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?php echo $root; ?>/events/seminar.php">Seminar Series</a></li>
	          </ul> -->
					</li>

					<li class="dropdown <?php if ($pageId == 'associ') {
											echo "active";
										} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Societies & Outreach Activities</a>
						<ul class="dropdown-menu">
							<!--<li><a href="<?php echo $root; ?>/societies/geosociety.php">Geography Society</a></li>
	           <li role="separator" class="divider"></li>
	            <li><a href="/geographynew/societies/geoschoolteachers.php">Geography for School Teachers</a></li>
                <li role="separator" class="divider"></li>
	            <li><a href="#">Geography Teachers Association</a></li>-->
						</ul>
					</li>

					<li class="<?php if ($pageId == 'res') {
									echo "active";
								} ?>"><a href="<?php echo $root; ?>/#">Research &amp; Publications</a></li>

					<li class="<?php if ($pageId == 'cnt') {
									echo "active";
								} ?>"><a href="<?php echo $root; ?>/contact.php">Contacts</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>