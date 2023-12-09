<?php
include('php/header.php');
?>

<link rel="stylesheet" href="css/additional_styles.css">

<main>
	<div class="left-column">
		<menu>
			<ul>
			<li class="li-bt"><a href="#">Merchandise</a></li>
			<li><a href="#">Equipment</a></li>
			<li><a href="#">Service</a></li>
			<li><a href="#">Seminars</a></li>
			<li><a href="#">Practice Development</a></li>
			<li><a href="#">Painless Web</a></li>
			<li><a href="#">BluChips Rewards</a></li>
			<li><a href="#">Earnings Builders</a></li>
			<li><a href="#">Interlink</a></li>
			<li><a href="#">Featured Products</a></li>
			<li><a href="#">Partners</a></li>
			<li><a href="#">International</a></li>
			<li><a href="#">Government</a></li>
			<li><a href="#">Handpiece repairs</a></li>
			<li><a href="form_math.php">Math operations</a></li>
			<li><a href="redirect_to_index.php">Redirect to home</a></li>
			<li><a href="server_info.php">Server info</a></li>
			</ul>
		</menu>
		<div class="no-adv-body">
			<div class="no-adv-title">
				<a href="#">Spotlight Features</a>
			</div>
			<div>
				<img class="no-adv-pic" src="img/medicine.jpg" alt="Medicine photo">
				<div class="no-adv-text">
					<b>Seminars in your area</b><br>
					Dates, topics, locations, <br>
					& prices. Save 10% when <br>
					3 or more sign-up! <br>
					<br>
					<b>Topics, Trends, <br>
					Techniques</b><br>
					Don't let your patients <br>
					give you the brush-off. <br>
					Increase patient <br>
					acceptance!
				</div>
			</div>
		</div>
	</div>
	<section class="main-content">
		<div class="main-top"><b>REDIRECT TO HOME</b></div>
		<div class="main-center">
			<div class="main-cnt-text"><b>Script for redirecting to ahother page</b></div>
			<div>You will redirected to home page in <span  id="countdown">3</span>...</div>
	</section>
</main>

<script>
	<?php require_once("js/redirection.js"); ?>
</script>

<?php
include('php/footer.php');
?>