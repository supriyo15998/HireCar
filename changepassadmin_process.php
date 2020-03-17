<?php
	include('config.php');
	if (isset($_POST['submit'])) {
		$id = $_SESSION['admin']['id'];
		$opass = $_POST['oldpass'];
		$npass = $_POST['newpass'];
		$cnpass = $_POST['cnfpass'];
		#verify if old password matches
	$qryStr = "SELECT id,pwd FROM admin WHERE id='$id' AND pwd='$opass'";
	$exec = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
	$count = mysqli_num_rows($exec);
	if ($count==1) {
		#the admin is valid along with the password
		if ($npass == $cnpass) {
			# update the new password..all good to go
			$qryStr = "UPDATE admin SET pwd='$npass' WHERE id='$id'";
			$exec = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
			if ($exec) {
				?><script type="text/javascript">
				alert('Password has been changed successfully!!!');
				window.location.href="home_admin.php?done";
				</script><?php
			}
		}
		else
		{
			?><script type="text/javascript">
			alert('Password mismatch!!!');
			window.location.href = "changepass_admin.php?error";
			</script><?php
		}
	}
	else
	{
		?><script type="text/javascript">
		alert('Invalid old password');
		window.location.href = "changepass_admin.php?error";
		</script><?php
	}
	}
	?>