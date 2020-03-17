<?php
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		include('config.php');
		if(empty($_POST['email']) or empty($_POST['pwd']))
		{
		die("Something went wrong!!!");		
		}
		$email = mysqli_real_escape_string($conn,trim($_POST['email']));
		$password = mysqli_real_escape_string($conn,trim($_POST['pwd']));
		#verify_admin
		$qryStr = "SELECT * FROM admin WHERE email='$email' AND pwd='$password'";
		$execute = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
		$count = mysqli_num_rows($execute);
		if ($count == 0) {
			# invalid user
			?>
			<script type="text/javascript">
				alert('Invalid User!!!');
				window.location.href = "login_admin.php?invalid";
			</script>
			<?php
		}
		else
		{
			#valid_admin
			$row = mysqli_fetch_array($execute);
			$_SESSION['admin'] = $row;
			header('Location: home_admin.php?success');
			exit;
		}
	}
?>