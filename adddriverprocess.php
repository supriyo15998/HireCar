<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	include('config.php');
	#store all values from form inputs in local variables
	$name = mysqli_real_escape_string($conn,trim($_POST['name']));
	$street = mysqli_real_escape_string($conn,trim($_POST['street']));
	$location = mysqli_real_escape_string($conn,trim($_POST['location']));
	$city = mysqli_real_escape_string($conn,trim($_POST['city']));
	$state = mysqli_real_escape_string($conn,trim($_POST['state']));
	$pin = mysqli_real_escape_string($conn,trim($_POST['pin']));
	$mobile = mysqli_real_escape_string($conn,trim($_POST['mobile']));
	$license = mysqli_real_escape_string($conn,trim($_POST['license']));

	if (empty($name) or empty($street) or empty($location) or empty($city) or empty($state) or empty($pin) or empty($mobile) or empty($license)) {
?> 
	<script type="text/javascript">
		alert("Empty fields found!!!");
		window.location.href = 'adddriver.php?error';
	</script>		
<?php
	exit;
	}
		#fresh data insert into database table -> student_details
		$QryString = "INSERT INTO driver (name,street,location,city,state,pin,mobile,license) VALUES ('$name','$street','$location','$city','$state','$pin','$mobile','$license')";
		#execute the above query string
		$exec = mysqli_query($conn,$QryString) or die(mysqli_error($conn));
		//var_dump($exec);
		if($exec)
		{
			?><script type="text/javascript">
		alert("Driver Added Successfully!!!");
		window.location.href = 'adddriver.php?success=1';
	</script><?php
		}

}
?>
