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
		.profile-grid {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
			gap: 20px;
			margin: 20px 0;
		}
		.profile-item {
			border: 1px solid #ddd;
			padding: 20px;
			text-align: center;
			border-radius: 10px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}
		.profile-item img {
			max-width: 100%;
			border-radius: 50%;
		}
		.profile-item h4 {
			margin-top: 15px;
			font-size: 1.2rem;
		}
		.profile-item h5 {
			color: #555;
			font-size: 1rem;
		}
		.profile-item p {
			margin: 10px 0;
			font-size: 0.9rem;
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
        <div class="page">
			<h3>Academic Staff</h3>
			<hr />

			<div class="profile-grid">
				<div class="profile-item">
					<img src="../assets/images/academic/chandranew.jpg" alt="Prof. R.M.M. Chandraratne" width="147" height="182">
					<h4><a href="rmm.php">Prof. R.M.M. Chandraratne</a></h4>
					<h5>Professor, Department of Archaeology</h5>
					<p>BA (Hons) (Perad), MA (Poona), Ph.D. (Pune), FSLCA</p>
					<p>Email: <a href="mailto:m.chandraratne@arts.pdn.ac.lk">m.chandraratne@arts.pdn.ac.lk</a></p>
					<p>Phone: +94 0812392583</p>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/proframbukwella.jpg" alt="Prof. Chulani Rambukwella" width="147" height="182">
					<h4><a href="rabukwella.php">Prof. Chulani Rambukwella</a></h4>
					<h5>Chair Professor of Archaeology</h5>
					<p>Phd (UK), MA (Peradeniya), BA (Peradeniya)</p>
					<p>Email: <a href="mailto:chulanir@pdn.ac.lk">chulanir@pdn.ac.lk</a>/<a href="mailto:chulanimw@gmail.com">chulanimw@gmail.com</a></p>
					<p>Phone: +94 718600523</p>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/ast.png" alt="Dr. A.S.T. Rajapakse" width="147" height="150">
					<h4><a href="ast.php">Dr. A.S.T. Rajapakse</a></h4>
					<h5>Senior Lecturer</h5>
					<p>B.A. (Peradeniya),P.G. Dip.(IHS, Netherlands), M.A. (I.P. University), Ph.D. (Peradeniya)</p>
					<p>Email: <a href="mailto:tsaru2003@yahoo.com">tsaru2003@yahoo.com</a></p>
					<p>Phone: +94 71 4395277</p>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/sandya.png" alt="Ms. K.G.A.M. Sandya Kumari Nawarathna Menike" width="147" height="182">
					<h4><a href="sandya.php">Ms. K.G.A.M. Sandya Kumari Nawarathna Menike</a></h4>
					<h5>Lecturer</h5>
					<p>BA(Hons)Peradeniya,MSc(PGIAR),Ph.D.Reading(PGIAR) MSLCA</p>
					<p>Email: <a href="mailto:sannawarathna@gmail.com">sannawarathna@gmail.com</a>/<a href="mailto:nawarathnasknm@pdn.ac.lk">nawarathnasknm@pdn.ac.lk</a></p>
					<p>Phone: +94 714 823 384</p>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/uditha.jpg" alt="Dr. Uditha Jinadasa" width="147" height="182">
					<h4><a href="uditha.php">Dr. Uditha Jinadasa</a></h4>
					<h5>Lecturer</h5>
					<p>BA & MSc in Geo-Informatics (Peradeniya), PhD (Leiden)</p>
					<p>Email: <a href="mailto:u.n.jinadasa@gmail.com">u.n.jinadasa@gmail.com</a>/<a href="mailto:ujinadasa@pdn.ac.lk">ujinadasa@pdn.ac.lk</a></p>
					<p>Phone: +94 71 497 0718</p>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/piyumi.png" alt="Ms. Piyumi Embuldeniya" width="147" height="182">
					<h4><a href="piyumi.php">Ms. Piyumi Embuldeniya</a></h4>
					<h5>Lecturer (Probationary)</h5>
					<p>MSSc. (Kelaniya), PGDip. in Museology (PGIAR, Kelaniya), B.A. (Kelaniya)</p>
					<p>Email: <a href="mailto:piyumie@arts.pdn.ac.lk">piyumie@arts.pdn.ac.lk</a></p>
					<p>Phone: +94 772383788</p>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/buddi.jpg" alt="Mr. Buddhisha Weerasuriya" width="147" height="182">
					<h4><a href="#">Mr. Buddhisha Weerasuriya</a></h4>
					<h5>Lecturer (Probationary)</h5>
					<p>M.Phil (Peradeniya) - Reading, B.A (Hons) (Peradeniya)</p>
					<p>Email: <a href="mailto:buddisha@arts.pdn.ac.lk">buddisha@arts.pdn.ac.lk</a></p>
					<p>Phone: +94 71 5206865</p>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/senarat.jpg" alt="Prof. Senarat Paranavitana" width="172" height="182">
					<h4><a href="#">Prof. Senarat Paranavitana</a></h4>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/UnknownProfile.png" alt="Prof. P.L. Prematilleke" width="172" height="182">
					<h4><a href="#">Prof. P.L. Prematilleke</a></h4>
				</div>

				<div class="profile-item">
					<img src="../assets/images/academic/seneviratna.jpg" alt="Prof. S.D.S. Seneviratne" width="172" height="182">
					<h4><a href="#">Prof. S.D.S. Seneviratne</a></h4>
				</div>
			</div>
		</div>
	</div>

	<?php require_once "../assets/footer.php" ?>
</body>
</html>
