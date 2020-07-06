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
   
<style type="text/css">
    body {
        color: #999;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
	}
	.form-control {
		box-shadow: none;
		border-color: #ddd;
	}
	.form-control:focus {
		border-color: #4aba70; 
	}
	.login-form {
        width: 350px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .login-form form {
        color: #434343;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
	}
	.login-form h4 {
		text-align: center;
		font-size: 22px;
        margin-bottom: 20px;
	}
    .login-form .avatar {
        color: #fff;
		margin: 0 auto 30px;
        text-align: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
		background: #4aba70;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
    .login-form .avatar i {
        font-size: 62px;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
	.login-form .form-control, .login-form .btn {
		min-height: 40px;
		border-radius: 2px; 
        transition: all 0.5s;
	}
	.login-form .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
	.login-form .btn {
		background: #4aba70;
		border: none;
		line-height: normal;
	}
	.login-form .btn:hover, .login-form .btn:focus {
		background: #42ae68;
	}
    .login-form .checkbox-inline {
        float: left;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .forgot-link {
        float: right;
    }
    .login-form .small {
        font-size: 13px;
    }
    .login-form a {
        color: #4aba70;
    }
</style>
</head>
<body>
<div class="login-form">    
    <form method="post">
		<div class="ava text-center mb-2"><img src="img/icaree.png" style="width:25%;"></div>
    	<h4 class="modal-title">Make donation</h4>
        <div class="form-group">
            <input type="text" id="name" class="form-control" placeholder="Fullname" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="currency" class="form-control" id="amount" placeholder="Amount in NGN" required="required">
        </div>
        
        <div class="form-group">
          <!-- <label for="">Fund</label> -->
          <select class="form-control" name="fund" id="fund">
            <option value="">--select fund--</option>
            <option>teen</option>
            <option>church growth</option>
            <option>homeless</option>
          </select>
        </div>
       
        <script src="https://js.paystack.co/v1/inline.js"></script>
        
        <button type="button" class="primary_btn form-control" onclick="payWithPaystack()"> Donate </button>
        <!-- <input type="submit" class="primary_btn form-control" value="Donate">               -->
    </form>			
    <div class="text-center small">Don't have a donor account? <a href="donorsignup">Create a donor account</a></div>
</div>

	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- <script src="js/stellar.js"></script> -->
	<!-- <script src="vendors/lightbox/simpleLightbox.min.js"></script> -->
	<!-- <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script> -->
	<!-- <script src="js/jquery.ajaxchimp.min.js"></script> -->
	<!-- <script src="js/mail-script.js"></script> -->
	<!-- <script src="js/countdown.js"></script> -->
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
    <script>
        var amount = document.getElementById('amount');
        var email = document.getElementById('email');
        
  function payWithPaystack(){
    
    var handler = PaystackPop.setup({
      key: 'pk_test_6b088624907a24682ebe74f4bf8fde11024090a2',
      email: email.value,
      amount: parseInt(amount.value) * 100,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
        //   alert('success.transaction ref is ' + response.reference);
        $.ajax({
			url:'app/controller/donorController?pointer=donate',
			method:'post',
			data:{ref:response.reference,email:email},
			success(data){
				if(data == 1){
					swal({
						title: "Successful!",
						text: "Thank You for your donation",
						icon: "success", 
					});
				}
			}
		})
      },
      onClose: function(){
          alert('Are you sure you want to exit');
      }
    });
    handler.openIframe();
  }
</script>
</body>
</html>
