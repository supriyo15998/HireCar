<?php include('config.php') ?>
<?php 
$username = $_SESSION['admin']['name'];
if($username == true)
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
	<title>UPDATE CAR</title>
</head>
<body>
	<h1 style="text-align: center;">UPDATE CAR DETAILS</h1>
<?php
	mysqli_select_db($conn,"hirecar");
	$sql = "SELECT * FROM vehicle";
	$records = mysqli_query($conn,$sql);
?>
<table>
	<tr>
		<th>Name</th>
		<th>Type</th>
		<th>Registration no</th>
		<th>Seating Capacity</th>
		<th>Fare per kilometer</th>
		<th>Image</th>
		<th>Driver Name</th>
	</tr>
	<?php
	while($prev = mysqli_fetch_array($records))
	{
		echo "<tr><form action=editcar_process.php method=post>";
		echo "<td><input type=text name=upname value='".$prev['name']."'></td>";
		echo "<td><input type=text name=uptype value='".$prev['type']."'></td>";
		echo "<td><input type=text name=upreg readonly=readonly value='".$prev['reg']."'></td>";
		echo "<td><input type=text name=ups_cap value='".$prev['s_cap']."'></td>";
		echo "<td><input type=text name=upfarepkm value='".$prev['farepkm']."'></td>";
		echo "<td><input type=text name=upImg value='".$prev['Img']."'></td>";
		echo "<td><input type=text name=updrivername value='".$prev['drivername']."'></td>";
		echo "<td><input type=submit value='Save Changes'>";
		echo "</form></tr>";
	}
	?>
</table>
CLICK <a href="#">HERE</a> TO BACK TO THE HOME PAGE
</body>
</html>