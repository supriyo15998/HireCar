<?php include('config.php') ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	include('config.php');
	#store all values from form inputs in local variables
	$firstname = mysqli_real_escape_string($conn,trim($_POST['fn']));
	$lastname = mysqli_real_escape_string($conn,trim($_POST['ln']));
	$dateofbirth = mysqli_real_escape_string($conn,trim($_POST['dob']));
	$gender = mysqli_real_escape_string($conn,trim($_POST['gen']));
	$street = mysqli_real_escape_string($conn,trim($_POST['Strt']));
	$location = mysqli_real_escape_string($conn,trim($_POST['Loc']));
	$city = mysqli_real_escape_string($conn,trim($_POST['Ct']));
	$state = mysqli_real_escape_string($conn,trim($_POST['St']));
	$pincode = mysqli_real_escape_string($conn,trim($_POST['Pin']));
	$mobile = mysqli_real_escape_string($conn,trim($_POST['Mob']));
	$email = mysqli_real_escape_string($conn,trim($_POST['mail']));
	$password = mysqli_real_escape_string($conn,trim($_POST['Pass']));

	if ( empty($firstname) or empty($lastname) or empty($dateofbirth) or empty($gender) or empty($street) or empty($location) or empty($city) or empty($state) or empty($pincode) or empty($mobile) or empty($email) or empty($password)) {
?> 
	<script type="text/javascript">
		alert("Empty fields found!!!");
		window.location.href = 'index.php?error';
	</script>		
<?php
	}
	$QryEmail = "SELECT mail FROM userprofile WHERE mail='$email'";
	$emailExec = mysqli_query($conn,$QryEmail) or die(mysqli_error($conn));
	if(mysqli_num_rows($emailExec)>0)
	{
		?>
			<script type="text/javascript">
				alert("User Already Exists!!!");
				window.location.href = 'registeruser.php?error=1'
			</script>
		<?php
		exit;
	}
		#fresh data insert into database table -> student_details
		$QryString = "INSERT INTO userprofile (fn,ln,dob,gen,Strt,Loc,Ct,St,Pin,Mob,mail,Pass) VALUES ('$firstname','$lastname','$dateofbirth','$gender','$street','$location','$city','$state','$pincode','$mobile','$email','$password')";
		#execute the above query string
		$exec = mysqli_query($conn,$QryString) or die(mysqli_error($conn));
		//var_dump($exec);
		if($exec)
		{
			?><script type="text/javascript">
		alert("Registered Successfully!!!");
		window.location.href = 'registeruser.php?success=1';
	</script><?php
		}


}
?>
