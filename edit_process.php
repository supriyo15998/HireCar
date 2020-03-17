<?php include('config.php'); ?>
<?php include('edit.php'); ?>
<?php
	if (empty($_POST['upfn']) or empty($_POST['upln']) or empty($_POST['updob']) or empty($_POST['updob']) or empty($_POST['upgen']) or empty($_POST['upStrt']) or empty($_POST['upLoc']) or empty($_POST['upCt']) or empty($_POST['upSt']) or empty($_POST['upPin']) or empty($_POST['upMob']) or empty($_POST['upmail'])) {
		#die("Something went wrong :/");
		?>
		<script type="text/javascript">
			alert("Empty Fields found!!!");
		</script>
		<?php
	}
	else {
	#mysqli_selet_db($conn,"bppimt");
	$sql_query = "UPDATE userprofile SET fn='".$_POST['upfn']."', ln='".$_POST['upln']."',dob='".$_POST['updob']."',gen='".$_POST['upgen']."', Strt='".$_POST['upStrt']."',Loc='".$_POST['upLoc']."',Ct='".$_POST['upCt']."', St='".$_POST['upSt']."',Pin='".$_POST['upPin']."',Mob='".$_POST['upMob']."' WHERE Userid='".$_SESSION['user']['Userid']."'";
	if (mysqli_query($conn,$sql_query)) {
		$getNewVals = mysqli_query($conn,"SELECT * FROM userprofile WHERE mail = '".$_SESSION['user']['mail']."'");
		$row = mysqli_fetch_array($getNewVals);
		$_SESSION['user'] = $row;
		header('Location: viewprofile.php?updated');
	}
	else
	{
		echo "Not Updated";
	}
}
?>