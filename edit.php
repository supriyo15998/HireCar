<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UPDATE | DB</title>
	<link rel="stylesheet" href="css/main1.css" />
</head>
<body>
	<h1 style="text-align: center; background-color: green; color: white; font-size: 25px;">UPDATE DETAILS</h1>
<?php
	mysqli_select_db($conn,"hirecar");
	$sql = "SELECT * FROM userprofile";
	$records = mysqli_query($conn,$sql);
?>
<form style="margin-left: 40%; width: 30%;" method="post" action="edit_process.php">
	<label>First Name</label><br>
	<input type="text" name="upfn" value="<?php echo $_SESSION['user']['fn'] ?>"><br>
	<label>Last Name</label><br>
	<input type="text" name="upln" value="<?php echo $_SESSION['user']['ln'] ?>"><br>
	<label>Date of Birth</label><br>
	<input type="text" name="updob" value="<?php echo $_SESSION['user']['dob'] ?>"><br>
	<label>Gender</label><br>
	<input type="text" name="upgen" value="<?php echo $_SESSION['user']['gen'] ?>"><br>
	<label>Street</label><br>
	<input type="text" name="upStrt" value="<?php echo $_SESSION['user']['Strt'] ?>"><br>
	<label>Location</label><br>
	<input type="text" name="upLoc" value="<?php echo $_SESSION['user']['Loc'] ?>"><br>
	<label>City</label><br>
	<input type="text" name="upCt" value="<?php echo $_SESSION['user']['Ct'] ?>"><br>
	<label>State</label><br>
	<input type="text" name="upSt" value="<?php echo $_SESSION['user']['St'] ?>"><br>
	<label>Pincode</label><br>
	<input type="text" name="upPin" value="<?php echo $_SESSION['user']['Pin'] ?>"><br>
	<label>Mobile</label><br>
	<input type="text" name="upMob" value="<?php echo $_SESSION['user']['Mob'] ?>"><br>
	<label>E-Mail</label><br>
	<input type="text" name="upmail" readonly="readonly" value="<?php echo $_SESSION['user']['mail'] ?>"><br>
	<input type="submit" name="ok" value="Update Details">
</form>
CLICK <a href="welcome_user.php">HERE</a> TO BACK TO THE HOME PAGE
</body>
</html>