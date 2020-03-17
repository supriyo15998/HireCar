<?php 
include('config.php');
?>
<?php 
$username = $_SESSION['user']['fn'];
if($username == true)
{

}
else
{
	header("Location: login.html");
}
?>
<?php
$car = mysqli_real_escape_string($conn,$_POST['car']);
$source = mysqli_real_escape_string($conn,$_POST['source']);
$destination = mysqli_real_escape_string($conn,$_POST['destination']);
$pickdate = mysqli_real_escape_string($conn,$_POST['pickdate']);
$distanceQry = "SELECT * FROM routes WHERE source='$source' AND destination='$destination'";
$distanceExec = mysqli_query($conn,$distanceQry);
$distance = mysqli_fetch_array($distanceExec);
$fkmQry = "SELECT * FROM vehicle WHERE name='$car'";
$fkmExec = mysqli_query($conn,$fkmQry);
$fkm = mysqli_fetch_array($fkmExec);
$regQry = "SELECT reg FROM vehicle WHERE name='$car'";
$regExec = mysqli_query($conn,$regQry);
$reg = mysqli_fetch_array($regExec);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CONFIRM BOOKING</title>
</head>
<body>
	<h1 style="background-color: black; color: white; text-align: center; opacity: 0.5;">CONFIRM YOUR BOOKING</h1>

		<form style="margin-left: 40%;">
			<label>Car Selected</label>
			<input type="text" name="" value="<?php echo $car; ?>" readonly="readonly"><br>
			<label>Pickup Venue</label>
			<input type="text" name="" value="<?php echo $source; ?>" readonly="readonly"><br>
			<label>Drop off Venue</label>
			<input type="text" name="" value="<?php echo $destination; ?>" readonly="readonly"><br>
			<label>Pickup Date</label>
			<input type="text" name="" value="<?php echo $pickdate; ?>" readonly="readonly"><br>
			<label>Distance(km)</label>
			<input type="number" name="" value="<?php echo $distance['distance']; ?>" readonly="readonly"><br>
			<label>Car Registration Number</label>
			<input type="number" name="" value="<?php echo $reg['reg']; ?>" readonly="readonly"><br>

<!-- 			<a href="#">Click here to view car and driver details</a> -->
		</form>
		<hr>
		<h2 style="background-color: black; color: white; text-align: center; opacity: 0.5; width: 40%; margin-left: 30%;">Total Fare</h2>
		<div style="margin-left: 40%;">
			<label>Fare per Kilometer:</label>
			<input type="number" name="" value="<?php echo $fkm['farepkm']; ?>" readonly="readonly"><br><br>
			<label>INCLUDING GST(18%):</label>
			<input type="number" name="" value="<?php $total = $fkm['farepkm']+(($fkm['farepkm']*18)/100); echo $total; ?>" readonly="readonly"><br><br>
		</div>
		<hr>
		<div style="margin-left: 40%;">
			<p>Total fare to be paid:</p>
			<input type="number" name="" value="<?php echo ($distance['distance']*$total); ?>" readonly="readonly">
		</div>
		<div style="margin-left: 40%;">
			<button onclick="window.print();">Print Receipt</button><br><br>
			<a href="carbooking.php">Click here to back</a>
		</div>
		
</body>
</html>