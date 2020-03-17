<?php include('config.php'); ?>
<?php 
$adminname = $_SESSION['admin']['name'];
if($adminname == true)
{

}
else
{
	header("Location: login_admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Car</title>
</head>
<body>
	<form method="post" action="addcar_process.php" enctype="multipart/form-data">
		<label>NAME :</label><input type="text" name="name" required="required"><br><br>
		
		<label>TYPE :</label><input type="text" name="type" required="required"><br><br>
		
		<label>REGISTRATION NUMBER :</label><input type="number" name="reg" required="required"><br><br>
		
		<label>SEATING CAPACITY :</label><input type="number" name="s_cap" required="required"><br><br>
		
		<label>FARE PER KILOMETER :</label><input type="number" name="fkm" required="required"><br><br>
		
		<label>IMAGE :</label>
		<input type="file" name="picture"><br><br>
		<label>Driver Name</label>
		<select name="driver">
			<option disabled="">Select Driver</option>
			<?php 
			$QryStr = "SELECT name FROM driver";
			$exec = mysqli_query($conn,$QryStr);
		if(mysqli_num_rows($exec)==0){
			echo "<option value=''> NO DRIVER FOUND</option>";
		} else {
			while($row=mysqli_fetch_array($exec)){
		
					?><option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option><?php
				}
			}
			?>
		</select><br>
		<input type="submit" name="submit">
	</form><br><br>
<a href="home_admin.php" style="background-color: grey;color: white;text-decoration: none; padding: 4px; font-size: 20px;">Click here to get back to the home page</a>&emsp;&emsp;
<a href="viewcar.php" style="background-color: grey;color: white;text-decoration: none; padding: 4px; font-size: 20px;">Click here to view and edit vehicles</a>
</body>
</html>