<?php include('config.php') ?>
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

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome1.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main2.css">
		</head>
		<body>
		<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">the Royal Essence of Journey</h6>
							<h1 class="text-white text-uppercase">
								Relaxed Journey Ever				
							</h1>
						</div>
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Book Your Car Today!</h4>
							<form class="form" role="form" autocomplete="off" action="confirmbooking.php" method="post">
							    <div class="form-group">
							       	<div class="default-select" id="default-select"">
										<select name="car">
											<option value="" disabled selected hidden>Select Car</option>
									<?php 
										$QryStr = "SELECT name FROM vehicle";
										$exec = mysqli_query($conn,$QryStr);
										if(mysqli_num_rows($exec)==0){
											echo "<option value=''> NO CAR FOUND</option>";
										} else {
											while($row=mysqli_fetch_array($exec)){
		
											?><option><?php echo $row['name'];?></option><?php
											}
										}
									?>
										</select>
									</div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select"">
											<select name="source">
												<option value="" disabled selected hidden>Pickup</option>
												<?php 
													$QryStr = "SELECT source FROM routes";
													$exec = mysqli_query($conn,$QryStr);
													if(mysqli_num_rows($exec)==0){
														echo "<option value=''> NO SOURCE FOUND</option>";
													} else {
													while($row=mysqli_fetch_array($exec)){
		
													?><option><?php echo $row['source'];?></option><?php
														}
													}
												?>
											</select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                          
											<input id="datepicker" class="dates form-control" name="pickdate" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select"">
											<select name="destination">
												<option value="" disabled selected hidden>Drop off</option>
												<?php 
													$QryStr = "SELECT destination FROM routes";
													$exec = mysqli_query($conn,$QryStr);
													if(mysqli_num_rows($exec)==0){
														echo "<option value=''> NO DESTINATION FOUND</option>";
													} else {
														while($row=mysqli_fetch_array($exec)){
		
													?><option><?php echo $row['destination'];?></option><?php
													}
												}
												?>
											</select>
										</div>
							        </div>
<!-- 							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                              
											<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div> -->
							    </div>							    
							    <!-- <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="name" placeholder="Your name">
							    	<input class="form-control txt-field" type="email" name="email" placeholder="Email address">
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number">
							    </div> -->
							    <div class="form-group row">
							        <div class="col-md-12">
							           <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Proceed to next</button>
							           <a href="welcome_user.php" style="text-decoration: none; color: white; font-size: 20px;">Back</a>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main2.js"></script>	
		</body>
	</html>



