<?php $root = "/archaeologynewweb"; ?>

<?php
if (!isset($pageId)) {
	$pageId = null;
}
?>

<!-- meta section -->

<meta name="description" content="The Department of Geography is one of the reputed departments in the Faculty of Arts, University of Peradeniya, Sri Lanka which was established in 1952." />
<meta name="author" content="root" />

<!-- css section -->

<link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>/assets/images/logo.png" />
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/bootstrap.css" />
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/custom.css" />
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
	.logocol {
		padding: 0;
		margin: 0;
		display: flex;
		align-items: center;
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


	.navbar-nav>li>a {

		color: #333;

	}

	.navbar-nav>li>a:hover {
		color: #008bff;
	}

	.navbar-header .navbar-brand {

		color: #333;
	}
</style>

</head>

<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-1 logocol">
					<img src="<?php echo $root; ?>/assets/images/logo.png" alt="Pdn_Logo" class="logoimg">
				</div>
				<div class="col-md-7 deptcol">
					<h2 class="deptname">Department of Archaeology</h2>
					<h4 class="uniname"> University of Peradeniya</h4>
				</div>
				<div class="col-md-4 searchcol">
					<form onSubmit="searchGeo()" method="get" action="" class="search-form">
						<div class="form-group has-feedback">
							<label for="search" class="sr-only">Search Archaelogy</label>
							<input type="text" class="form-control" name="query" id="query" placeholder="Search Archaelogy">
							<span class="glyphicon glyphicon-search form-control-feedback"></span>
						</div>
					</form>
				</div>
			</div>

			<!-- <div class="col-md-2">
				
			</div>
			<div class="col-md-5">
				
			</div>
			<div class="col-md-offset-1 col-md-3">
				

			</div> -->
		</div>
	</header>

	<script>
		function searchGeo() {
			window.open('https://www.google.com/search?q=site:arts.pdn.ac.lk/archaeologynewweb+' + document.getElementById('query').value, '_blank');
		}
	</script>


	<nav class="navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programmes <span class="caret"></span></a>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $root; ?>/staff/academic.php">Academic Staff</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo $root; ?>/staff/nonacademic.php">Non-Academic Staff</a></li>
						</ul>
					</li>

					<!--<li class="dropdown <?php if ($pageId == 'event') {
												echo "active";
											} ?>">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
              <li class="<?php if ($pageId == 'faci') {
								echo "active";
							} ?>"><a href="<?php echo $root; ?>/facilities.php">Facilities</a></li>
	          <!--<ul class="dropdown-menu">
              	<li><a href="<?php echo $root; ?>/events/conference.php">International Conference</a></li>
                <li role="separator" class="divider"></li>
	            <li><a href="<?php echo $root; ?>/events/socday.php">Sociology Day</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?php echo $root; ?>/events/seminar.php">Seminar Series</a></li>
	          </ul>-->
					</li>

					<li class="dropdown <?php if ($pageId == 'associ') {
											echo "active";
										} ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Societies & Outreach Activities <span class="caret"></span></a>
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