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

	<style>
		.breadcrumb{
            background-color: #F0F8FF;
            padding: 10px;
            border-radius: 8px;
        }
        .breadcrumb li {
            color: #003269 !important;
            font-weight: 500;
        }
        .breadcrumb > li + li:before {
            color: #003269;
            padding-right: 2px;
        }
        .breadcrumb li a {
            color: #1b98e5 !important;
        }

        .breadcrumb li a:hover {
            color: #1684CC !important;
        }
		.nonaced-hr {
			border: solid 2px #1b98e5;
			margin: 2% 0;
		}

		.nonacademic-title {
			font-size: 4rem;
			font-weight: 400;
			color: #003269 !important;
			margin-top: 0 !important;
		}

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
			text-align: center;
		}

		.profile-item:hover {
			transform: scale(1.05);
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

		.profile-description p {
			font-size: 1.2rem;
			line-height: 1.5;
		}

		.profile-grid {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
			grid-gap: 20px;
		}

		@media (max-width: 576px) {
			.nonacademic-title {
				font-size: 3rem !important;
			}

		}

		@media (max-width: 450px) {
			.nonacademic-title {
				font-size: 2.5rem !important;
			}
		}
	</style>


	<div class="container">
		<ol class="breadcrumb">
			<li><a href="../index.php">Home</a></li>
			<li class="active">Staff</li>
			<li class="active">Non-Academic</li>
		</ol>
		<div>
			<h3 class="nonacademic-title">Non-Academic Staff</h3>
			<hr class="nonaced-hr" />

			<div class="profile-grid">

				<div class="profile-item">
					<div class="face"><img src="../assets/images/nonacademic/attanayake.jpg" class="img-responsive" alt="nonacademic"></div>
					<div class="profile-description">
						<h4 style="color: #1b98e5;">Mr. R.M.Attanayake</h4>
						<em>Works Aid (Special Grade)</em><br />
						<span class="fa fa-phone"></span>
						<span>+94 812392553</p>
					</div>
				</div>


			</div>

		</div>
	</div>

	<?php require_once "../assets/footer.php" ?>
	</body>

</html>