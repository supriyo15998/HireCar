<?php include('config.php'); 
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	include('config.php');
	#store all values from form inputs in local variables
	$source = mysqli_real_escape_string($conn,trim($_POST['source']));
	$destination = mysqli_real_escape_string($conn,trim($_POST['destination']));
	$distance = mysqli_real_escape_string($conn,trim($_POST['distance']));

	if ( empty($source) or empty($destination) or empty($distance)) {
?> 
	<script type="text/javascript">
		alert("Empty fields found!!!");
		window.location.href = 'addroutes.php?error';
	</script>		
<?php
	}
		#fresh data insert into database table -> student_details
		$QryRoute = "INSERT INTO routes (source,destination,distance) VALUES ('$source','$destination','$distance')";
		#execute the above query string
		$exec = mysqli_query($conn,$QryRoute) or die(mysqli_error($conn));
		//var_dump($exec);
		if($exec)
		{
			?><script type="text/javascript">
		alert("Route Added Successfully!!!");
		window.location.href = 'addroutes.php?success=1';
	</script><?php
		}


}
?>