<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	include('config.php');
	#store all values from form inputs in local variables
	$name = mysqli_real_escape_string($conn,trim($_POST['name']));
	$type = mysqli_real_escape_string($conn,trim($_POST['type']));
	$reg = mysqli_real_escape_string($conn,trim($_POST['reg']));
	$s_cap = mysqli_real_escape_string($conn,trim($_POST['s_cap']));
	$fkm = mysqli_real_escape_string($conn,trim($_POST['fkm']));
	$drivername = mysqli_real_escape_string($conn,$_POST['driver']);
	$file_name = $_FILES['picture']['name'];
	$file_size = $_FILES['picture']['size'];
	$file_type = $_FILES['picture']['type'];
	if ($file_type == "image/png" or $file_type == "image/jpg" or $file_type == "image/jpeg" or $file_type == "image/JPEG" or $file_type == "JPG" or $file_type == "image/gif" or $file_type == "image/PNG") 
	{
		//all good to go
		$folder = "images";
		if (!file_exists($folder))
		{
			mkdir($folder);
		}
		$destination = $folder.'/'.rand(0000,9999).'_'.$file_name;
		$tmpsource = $_FILES['picture']['tmp_name'];
		$status = move_uploaded_file($tmpsource, $destination) or die($_FILES['picture']['error']);

	}
	else
	{
		echo "Sorry! File type incorrect";
	}






	if (empty($name) or empty($type) or empty($reg) or empty($s_cap) or empty($fkm)) {
?> 
	<script type="text/javascript">
		alert("Empty fields found!!!");
		window.location.href = 'addcar.php?error';
	</script>		
<?php
	exit;
	}
		#fresh data insert into database table -> student_details
		$QryString = "INSERT INTO vehicle (name,type,reg,s_cap,farepkm,Img,drivername) VALUES ('$name','$type','$reg','$s_cap','$fkm','$destination','$drivername')";
		#execute the above query string
		$exec = mysqli_query($conn,$QryString) or die(mysqli_error($conn));
		//var_dump($exec);
		if($exec)
		{
			?><script type="text/javascript">
		alert("Car Added Successfully!!!");
		window.location.href = 'addcar.php?success=1';
	</script><?php
		}


}
?>
