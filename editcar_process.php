<?php include('config.php');
 ?>
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
<?php
	if (empty($_POST['upname']) or empty($_POST['uptype']) or empty($_POST['upreg']) or empty($_POST['ups_cap']) or empty($_POST['upfarepkm']) or empty($_POST['upImg']) or empty($_POST['updrivername'])) {
		#die("Something went wrong :/");
		?>
		<script type="text/javascript">
			alert("Something Went Wrong!!!");
		</script>
		<?php
	}
	else {
	$sql_query = "UPDATE vehicle SET name='$_POST[upname]', phone='$_POST[uptype]',name='$_POST[upreg]', phone='$_POST[ups_cap]',name='$_POST[upfarepkm]', phone='$_POST[upImg]',name='$_POST[updrivername]'";
	if (mysqli_query($conn,$sql_query)) {
		header('Location: viewcar.php');
	}
	else
	{
		echo "Not Updated";
	}
}
?>