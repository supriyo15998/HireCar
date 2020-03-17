<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Register | HireCar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style_reguser.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Register Here</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="process_user.php" method="post">
					<input class="text" type="text" name="fn" placeholder="First Name" required="">
					<input class="text" type="text" name="ln" placeholder="Last Name" required="">
					<label style="color: white;">Date of Birth:</label>
					<input type="date" name="dob" placeholder="Date of Birth" required=""><br>
					<label style="color: white;">Gender:</label>
					<input type="radio" name="gen" value="male" required="required">Male
					<input type="radio" name="gen" value="female" required="required">Female
					<input type="radio" name="gen" value="others" required="required">Others
					<input class="text" type="text" name="Strt" placeholder="Street" required="">
					<input class="text" type="text" name="Loc" placeholder="Location" required="">
					<input class="text" type="text" name="Ct" placeholder="City" required="">
					<input class="text" type="text" name="St" placeholder="State" required="">
					<input class="text" type="text" name="Pin" placeholder="Pincode" required="">
					<input class="text" type="text" name="Mob" placeholder="Mobile Number" required="">
					<input class="text email" type="email" name="mail" placeholder="Email" required="">
					<input class="text w3lpass" type="password" name="Pass" placeholder="Password" required="">
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.html"> Login Now!</a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>