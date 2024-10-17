<?php
	$pageId = "staff";
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Department of Archaeology</title>

	<?php require_once "../assets/header.php"; ?>
	
	<!-- Styling for non-academic staff page -->
    <style>
        /* Styling the profile grid items */
        .profile-item {
			border: 1px solid #e0e0e0;
			border-radius: 8px;
			overflow: hidden;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			margin-bottom: 20px;
			padding: 20px;
			background-color: #f9f9f9;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center; /* Ensures the text is centered */
		}

		/* Hover effect on profile items */
		.profile-item:hover {
			transform: scale(1.05);
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
			background-color: #fff;
		}

		/* Styling the profile image */
		.profile-item img {
			width: 150px;
			height: 150px;
			object-fit: cover;
			border-radius: 50%;
			margin-bottom: 15px;
		}

		/* Increased font sizes for profile description */
		.profile-description h4 {
			font-size: 2rem;
			font-weight: bold;
		}

		.profile-description h5 {
			font-size: 1.4rem;
			color: #555;
		}

		.profile-description blockquote {
			font-size: 1.2rem;
			color: #777;
			border-left: 3px solid #007bff;
			padding-left: 10px;
		}

		/* Increase for the profile description text */
		.profile-description p {
			font-size: 1.2rem;
			line-height: 1.5;
		}

		/* Ensuring grid layout looks good */
		.profile-grid {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
			grid-gap: 20px;
		}

    </style>
	
	<!-- begin body content -->

	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="../index.php">Home</a></li>
		  <li class="active">Staff</li>
		  <li class="active">Non-Academic</li>
		</ol>
        <div class="page">
		<h2 class="text-center mb-4">Non-Academic Staff</h2><br>
		
		<div class="profile-grid">
		
			<div class="profile-item">
		        <div class="face"><img src="../assets/images/nonacademic/attanayake.jpg" class="img-responsive" alt="nonacademic"></div>
		        <div class="profile-description">
		        	<h4>Mr. R.M.Attanayake</h4>
		        	<blockquote>
		        		<em>Works Aid (Special Grade)</em><br />
		        		<span class="fa fa-phone"></span>
		        	<span>+94 812392553</p>	        		
		        	</blockquote>
		        </div>
			</div>

			<!-- Add other staff members similarly -->

		</div>

        </div>
	</div>

	<?php require_once "../assets/footer.php" ?>
</body>
</html>
