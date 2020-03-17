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
	<title>Profile | HireCar</title>
</head>
<body>
	<?php
	$Qry = "SELECT * FROM vehicle";
	$exec = mysqli_query($conn,$Qry) or die(mysqli_error($conn));
	if (mysqli_num_rows($exec) > 0) {
	?>
	<table border="1" cellpadding="5">
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Registration Number</th>
				<th>Seating Capacity</th>
				<th>Fare per kilometer</th>
				<th>Image</th>
				<th>Driver Name</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_array($exec)) {?>
			<tr>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['type']?></td>
				<td><?php echo $row['reg']?></td>
				<td><?php echo $row['s_cap']?></td>
				<td><?php echo $row['farepkm']?></td>
				<td><?php echo $row['Img']?></td>
				<td><?php echo $row['drivername']?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("No Data Found!!!");
		</script>
		<?php
		#echo "No data found!!!!";
	}
	?>
	?>
	<a href="#.php">click here to back home page</a><br>
	<a href="editcar.php">Click here to edit details</a>
</body>
</html>