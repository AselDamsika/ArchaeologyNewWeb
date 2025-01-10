<?php
$pageId = "cnt";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Department of Archaeology</title>


	<style>
   
		.contact-container {
			margin-top: 20px;
			margin-bottom: 50px;
		}	

		.contact-info {
			margin-bottom: 20px;
			
		}


		.contact-title {
			font-size: 1.5em;
			font-weight: bold;
			margin-bottom: 10px;
		}

		.contact-detail {
			font-size: 1.2em;
			line-height: 1.5;
		}

		.span-title {
			font-weight: bold;
		}
   
		.contact-detail a {
			color: #000;
		}

		.contact-detail a:hover {
			color: #337ab7;
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

		<div class="row">
			<h2>Contact Us</h2>

			<div class="col-md-4 contact-info">
				<h3 class="contact-title">Postal Address</h3>
				<p class="contact-detail">
					Department of Archaeology<br>
					Faculty of Arts<br>
					University of Peradeniya<br>
					Peradeniya 20400<br>
					Sri Lanka
				</p>
			</div>

			<div class="col-md-4 contact-info">
				<h3 class="contact-title">Telephone</h3>
				<p class="contact-detail"><span class="span-title">Office : </span>+94 81 239 2553</p>
				<p class="contact-detail"><span class="span-title">Staff Room : </span>+94 81 239 2555</p>
				<p class="contact-detail"><span class="span-title">Head of the Department: </span>+94 81 239 2551</p>
				<p class="contact-detail"><span class="span-title">Laboratory: </span>+94 81 239 2581</p>
			</div>

			<div class="col-md-4 contact-info">
				<h3 class="contact-title">Online</h3>
				

				<p  class="contact-detail"><span class="span-title">Email : </span><a href="mailto:arch.dip.peradeniya@gmail.com">arch.dip.peradeniya@gmail.com</a></p>
				<p class="contact-detail"><span class="span-title">Web : </span><a href="https://arts.pdn.ac.lk/archaeologynew/" target="_blank">arts.pdn.ac.lk/archaeologynew</a></p>
				<p class="contact-detail"><span class="span-title">Facebook : </span><a href="https://www.facebook.com/profile.php?id=100086379914591" target="_blank">Facebook Page</a></p>
			</div>
		</div>
	</div>

	<?php require_once "assets/footer.php" ?>
</body>

</html>