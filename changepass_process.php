<?php
	include('config.php');
	if (isset($_POST['submit'])) {
		$id = $_SESSION['user']['Userid'];
		$opass = $_POST['oldpass'];
		$npass = $_POST['newpass'];
		$cnpass = $_POST['cnfpass'];
		#verify if old password matches
	$qryStr = "SELECT Userid,Pass FROM userprofile WHERE Userid='$id' AND Pass='$opass'";
	$exec = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
	$count = mysqli_num_rows($exec);
	if ($count==1) {
		#the user is valid along with the password
		if ($npass == $cnpass) {
			# update the new password..all good to go
			$qryStr = "UPDATE userprofile SET Pass='$npass' WHERE Userid='$id'";
			$exec = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
			if ($exec) {
				?><script type="text/javascript">
				alert('Password has been changed successfully!!!');
				window.location.href="welcome_user.php?done";
				</script><?php
			}
		}
		else
		{
			?><script type="text/javascript">
			alert('Password mismatch!!!');
			window.location.href = "changepass_user.php?error";
			</script><?php
		}
	}
	else
	{
		?><script type="text/javascript">
		alert('Invalid old password');
		window.location.href = "changepass_user.php?error";
		</script><?php
	}
	}
	?>