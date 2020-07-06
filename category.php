<?php include_once('app/inc/core.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100">
				<?php $core->message();?>
				<form action="app/controller/?pointer=getstarted" method="POST">
					
					<span class="login100-form-title p-b-48">
						<img src="img/icaree.png" style="width:30%;">
					</span>

					<div class="wrap-input100 validate-input">
						<div class=""  style="margin-top:50px;">
						<input class="" type="radio" value="1" name="donor">
						<span class="">Are you a Donor</span>
						<hr>
						</div>
					<input class="" type="radio" value="2" name="donor">
					<span class="">Ask for welfare</span>
					</div>
					<div class="form-check mb-4">
						<input class="form-check-input" type="checkbox" value="terms" name="terms" id="terms">
					
						<label class="form-check-label" for="terms">
							I confirm that i have read and agreed with the Terms and Condition
						</label>
					</div>
					<input type="submit" class="btn-primary btn-block btn" value="Next">

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<script>
	var id = document.getElementById('terms');
	
</script>