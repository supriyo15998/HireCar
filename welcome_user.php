<?php include('config.php') ?>
<?php 
$username = $_SESSION['user']['fn'];
if($username == true)
{

}
else
{
	header("Location: login.html");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Home | User</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main1.css" />
	</head>
	<body>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome <?php echo $_SESSION['user']['fn']; ?>,</h1>
					</header>
					<footer>
						<a href="viewprofile.php" class="button">View Profile</a>
						<a href="carbooking.php" class="button">Book a Car</a>
						<a href="changepass_user.php" class="button">Change Password</a>
						<a href="logout_user.php" class="button">Logout</a>
					</footer>
				</div>
			</section>




		<!-- Footer -->
			<footer id="footer">
				<div class="inner" style="height: 10px;">
					<div class="copyright" style="font-size: 25px;">
						Designed and Developed By:
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="js/jquery1.min.js"></script>
			<script src="js/skel1.min.js"></script>
			<script src="js/util1.js"></script>
			<script src="js/main1.js"></script>

	</body>
</html>