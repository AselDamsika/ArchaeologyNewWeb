<?php $root = "/archaeologynewweb"; ?>

<style>
	footer {
		background-color: #003269;
		color: white;
	}

	.fotBar {
		padding: 2% 0;
	}

	.fotStripe {
		padding: 1% 0;
	}

	.footer-main-col{
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		align-items: flex-start;
		padding: 0;
	}
	.footer-col {
		display: flex;
		flex-direction: column;
		align-items: center;
		padding: 0;
	}

	.footer-col a {
		color: white;
		font-size: 1.6rem;
		line-height: 2;
	}

	.footer-col a:hover {
		color: #007bff;
	}
	.quick-links{
		margin: 0;
		font-size: 3rem;
	}
</style>

<footer>
	<div class="fotBar">
		<div class="container">
			<div class="row">
				<div class="col-md-3 footer-main-col">
					<h3 class="quick-links">Quick Links</h3>
				</div>
				<div class="col-md-3 footer-col">
					<a href="<?php echo $root ; ?>/ac/under.php">UNDERGRADUATE</a>
					<a href="http://www.pgihs.lk/">POSTGRADUATE</a>
					<a href="#">ALUMNI</a>
				</div>
				<div class="col-md-3 footer-col">
					<a href="<?php echo $root ; ?>/">ARCHAEOLOGY</a>
					<a href="http://arts.pdn.ac.lk/" target="_blank">ARTS</a>
					<a href="http://www.pdn.ac.lk/" target="_blank">UoP</a>
				</div>
				<div class="col-md-3 footer-col">
					<a href="https://webmail.pdn.ac.lk/" target="_blank">WEBMAIL</a>
					<a href="https://www.pdn.ac.lk/login/" target="_blank">LOGIN</a>
					<a href="<?php echo $root ; ?>/contact.php">CONTACTS</a>
				</div>
			</div>
		</div>
	</div>
	<div class="fotStripe">Copyright ©2024 All Rights Reserved - Department of Archaeology - University of Peradeniya</div>
</footer>

<script src="<?php echo $root ; ?>/assets/js/jquery.js"></script>
<script src="<?php echo $root ; ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo $root ; ?>/assets/js/toggleTab.js"></script>
<script src="<?php echo $root ; ?>/assets/js/lightbox.js"></script>
<script src="<?php echo $root ; ?>/assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $root ; ?>/assets/engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo $root ; ?>/assets/engine1/script.js"></script>