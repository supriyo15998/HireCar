<?php
// session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	include('config.php');
	if(empty($_POST['mail']) or empty($_POST['Pass']))
	{
		die("Something went wrong!!!");		
	}
	$username = mysqli_real_escape_string($conn,$_POST['mail']);
	$password = mysqli_real_escape_string($conn,$_POST['Pass']);
	#verifying
	$qryStr = "SELECT * FROM userprofile WHERE mail='$username' AND Pass='$password'";
	$execute = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
	$count = mysqli_num_rows($execute);
	if ($count==1) {
		# invalid user
			#valid user
		$row = mysqli_fetch_array($execute);
		$_SESSION['user'] = $row;
		header('Location: welcome_user.php?success');
		exit;
		
	}
	else
	{
	?>
		<script type="text/javascript">
			alert('Invalid user!');
			window.location.href = "login.html?invalid";
		</script>
		<?php
	}
}

?>