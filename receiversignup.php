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
    </head>
<body>

<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-sm-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col-sm-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Current Address" required="required">
        </div> 
        <div class="form-group">
            <select class="form-control form-control-lg pb-5 mb-4">
               <option class="form-control">Distribution center (House of fellowship center)</option>
               <option>solution center</option>
               <option>Emmanuel Parish</option>
               <option>House of Joy</option>
               <option>Mercy seat</option>
               <option>House of Victory</option>
               <option>Throne of Grace</option>
               <option>Wealthy House</option>
               <option>House of testimony</option>
               <option>Court of His Majesty</option>
               <option>Excellent Family</option>
               <option>Tent of Gathering</option>
               <option>Throne of Mercy</option>
               <option>House of favour</option>
               <option>Sanctuary of Joy, Epe</option>
               <option>Jesus House, Itoke</option>
               <option>House of favour, Ayeteju</option>
               <option>The Elevation Church, Igando</option>
               <option>City of Enlargement, Iyesi</option>
           </select>
        </div>
        <div class="fellow p-3" style="background:black;">
        <label>House of fellowship Membership</label>
        <div class="form-check">
            
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
              Existing Member
         </label>
       </div>
        <div class="form-check">
            
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
              New Member
         </label>
       </div>
        </div>
        <div class="form-group mt-2">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="primary_btn form-control text-white">Register Now</button>
        </div>
    </form>
	
</div>
                         
	
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/countdown.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>