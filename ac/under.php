<?php
$pageId = "ac";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Department of Archaeology</title>

	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<?php require_once "../assets/header.php"; ?>

	<!-- Custom Styling -->
	<style>
		body {
			font-family: "Book Antiqua", Palatino, "Palatino Linotype", serif;
		}
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

		.page{
			padding: 0;
		}

		.page h3 {
			font-size: 4rem;
            font-weight: 400;
            color: #003269 !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
		}


		.under-hr {
            border: solid 2px #1b98e5;
            margin: 2% 0;
        }

		.course-box {
			border: 2px solid #1b98e5;
			border-radius: 10px;
			padding: 15px;
			margin-top: 20px;
			margin-bottom: 30px;
			background-color: #f9f9f9;
			transition: transform 0.2s ease, box-shadow 0.2s ease;
		}

		.course-box:hover {
			transform: scale(1.01);			
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);		
			background-color: #f0f8ff;
		}

		.course-box h4 {
			color: #1b98e5;
			font-weight: bold;
			margin-bottom: 10px;
		}

		.course-box ul {
			padding-left: 20px;
		}

		.course-box li {
			font-size: 16px;
			padding-left: 10px;
			position: relative;
			color: #505050 !important;
		}

		.course-box li::before {
			content: "•";
			color: #1b98e5;
			font-weight: bold;
			position: absolute;
			left: -10px;
		}
		.course-box h4{
			font-size: 2.5rem;
		}

		@media (max-width: 576px) {
            .text-secondary {
                font-size: 3rem !important;
            }
            .course-box li {
                font-size: 1.4rem !important;
            }
        }
		@media (max-width: 450px) {
		    .text-secondary{
				font-size: 2.5rem !important;
			}
			.course-box h4{
				font-size: 1.6rem !important;
			}
			.course-box li {
				font-size: 1.3rem !important;
			}
		}
	</style>
</head>

<body>

	<!-- Main container for Bootstrap grid -->
	<div class="container" style="margin-bottom: 30px; padding-bottom: 20px;">
		<!-- Breadcrumb navigation -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
			<li class="breadcrumb-item active">Programmes</li>
			<li class="breadcrumb-item active">Undergraduate Programme</li>
		</ol>

		<div class="page bg-white p-10 mb-10">
			<h3 class="text-secondary">Course Structure</h3>
			<hr class="under-hr" />

			<div class="cList">
				<div class="course-box">
					<h4>First Year Courses</h4>
					<ul class="list-unstyled">
						<li>ACL 1001 Introductory Archaeology I</li>
						<li>ACL 1002 Introductory Archaeology II</li>
					</ul>
				</div>

				<div class="course-box">
					<h4>Second Year Courses</h4>
					<ul class="list-unstyled">
						<li>ACL 2001 Palaeo-Human Biology and Ethno-Archaeology</li>
						<li>ACL 2002 Socio-Economic History of Ancient India</li>
						<li>ACL 2003 Archaeological Theory and Methods</li>
						<li>ACL 2004 Cultural Resource Management</li>
						<li>ACL 2005 Conservation of Archaeological Material</li>
						<li>ACL 2006 Formation of Ancient Civilizations</li>
						<li>ACL 2007 The Socio-Economic History of Ancient Sri Lanka</li>
						<li>ACL 2008 Practical Archaeology</li>
						<li>ACL 2009 Heritage Museum and Management</li>
					</ul>
				</div>

				<div class="course-box">
					<h4>Third Year Courses</h4>
					<ul class="list-unstyled">
						<li>ACL 3001 Crafts & Technology of Pre-Industrial South Asia</li>
						<li>ACL 3002 Epigraphic Studies of Ancient India</li>
						<li>ACL 3003 The Built Environment of Ancient India</li>
						<li>ACL 3004 Coinage Systems of Ancient India</li>
						<li>ACL 3005 Coinage Systems of Ancient Sri Lanka</li>
						<li>ACL 3006 The Built Environment of Ancient Sri Lanka</li>
						<li>ACL 3007 Epigraphic Studies of Ancient Sri Lanka</li>
						<li>ACL 3008 Archaeological Data Retrieval Systems & Processes</li>
						<li>ACL 3010 Bio-Archaeology</li>
					</ul>
				</div>

				<div class="course-box" style="margin-bottom: 30px;">
					<h4>Fourth Year Courses</h4>
					<ul class="list-unstyled">
						<li>ACL 4001 Environmental Archaeology</li>
						<li>ACL 4002 World Prehistory</li>
						<li>ACL 4003 The Bronze Age & Early Iron Age Archaeology of Ancient India</li>
						<li>ACL 4004 Ancient Cultural Ecology</li>
						<li>ACL 4005 Prehistory of Sri Lanka</li>
						<li>ACL 4006 Early Iron Age Archaeology of Sri Lanka the Formative Period</li>
						<li>ACL 4999 Dissertation</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Include Bootstrap JS and dependencies -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</div>

	<?php require_once "../assets/footer.php" ?>

</body>

</html>