<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/icaree.png" type="image/png">
        <title>Icare Operation</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
   <style>

	body {
		color: #999;
		background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
        border-radius: 0;
	}
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2 {
		color: #636363;
        margin: 0 0 15px;
		text-align: center;
    }
    .signup-form .lead {
        font-size: 14px;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form {		
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
		background: none;
		border-width: 0 0 1px 0;
		padding-left: 5px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
        border-radius: 3px;
		border: none;
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
	}
	.signup-form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 17px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 9px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>
</head>
<body>
<div class="signup-form">	
	
	<form method="post" id="form">
	 
		<h2>Register as a Donor</h2>
		  <p class="lead">Kindly Fill the form below</p>
		  <div id="error" class="alert alert-danger alert-dismissable"></div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required="required">
			</div>
		  </div>
		  
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required="required">
			</div>
        </div>
        <div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-phone"></i></span>
					<input type="tel" class="form-control" name="phone" placeholder="Phone Number">
				</div>
				<small id="" class="pl-3 form-text text-success">This field is optional</small>
		  </div>
		  <div class="form-group">
			  
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="address" placeholder="Your address">
				
			</div>
			<small id="" class="pl-3 form-text text-success">This field is optional</small>
		  </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="required">
			</div>
			<small id="emailMsg" class="pl-3 form-text text-success"></small>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password" class="form-control" id="c_password" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>        
		<div class="form-group">
            <button type="submit" class="primary_btn form-control" id="sign-up">Sign Up</button>
        </div>
		<p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
    </form>
	<div class="text-center">Already have an account? <a href="donorlogin.php">Login here</a>.</div>
</div>

	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>
<script>
	var pass = $('#password').val();
	var c_pass = $('#c_password').val();
	var err = $('#error');
	var fname = $('#firstname').val();
	var lname = $('#lastname').val();
	var email = $('#email');
	var form = $('#form');
	err.hide();
	
	email.focus(function(){
		$('#emailMsg').hide();
	})

	email.blur(function(){
		$('#emailMsg').show();
		var data = email.val();
		$.ajax({
			url:'app/controller/donorController?pointer=confirmEmail',
			method:'post',
			dataType:'json',
			data:{email:data},
			success: function(data){
				if(data == 1){
					email.attr('style','border:1px solid red');
					$('#emailMsg').html("<span class='text-danger'>email already exists</span>")
				}else if(data == 0){
					email.attr('style','border:1px solid green');
					$('#emailMsg').html("<span class='text-success'>email confirmed</span>")
				}
			}
		})
	})
	
	$('#form').submit(function(e){
		e.preventDefault()
		err.text('');
		err.hide();
		$.ajax({
			url:'app/controller/donorController?pointer=add',
			method:'post',
			data:form.serialize(),
			success(data){
				if(data == 2){
					swal({
						title: "Successful!",
						text: "You have been registered as a donor of RCCG icare, kindly proceed to your email",
						icon: "success", 
					});
				}else if(data == 0){
					swal({
						title: "Error!",
						text: "All fields are required except your phone-number and address",
						icon: "error",
					});
				}else if(data == 1){
					err.show()
					err.text('Password does not match');
					location.href = "#error";
				}else if(data == 3){
					err.show()
					err.text('Password must be atleast 8 characters');
					location.href = "#error";
				}
			}
		})
		
	})
	
</script>