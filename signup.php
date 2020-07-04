<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webiste | SignUp</title>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/signup.css" type="text/css">
</head>
<body>
	<div class="main-div">
    <div class="container h-100"> 		   
		<h1 class="text-center heading-page pt-3">Become a Patron</h1>
		<div class="d-flex justify-content-center">
			<div class="brand_logo_container p-3 animate__animated animate__slideInDown">
				<img src="images/user.png" class="brand_logo" alt="Logo">
			</div>
		</div>
		<div class="form-container mr-auto ml-auto">
			<form class="w-100" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">     
				<div class="form-row">
					<div class="form-group col-md-6">					  
					  <input type="text" class="form-control" placeholder="Full Name" name="fname">
					</div>
					<div class="form-group col-md-6">					  
					  <input type="text" class="form-control" placeholder="User name" name="uname">
					</div>
				  </div>                  
				<div class="form-row">
					<div class="form-group col-md-12">					  
					  <input type="email" class="form-control" placeholder="Email" name="email">
					</div>					
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">					  
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>
				</div>	
				<div class="form-row">
					<div class="form-group col-md-12">					  
						<input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
					</div>
				</div>				  				  				  				 
				<div class="form-group mt-3">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="confirmationBox">
						<label class="custom-control-label" for="confirmationBox">I accept the Term of use & policy</label>
					</div>
				</div>
				
				<hr class="text-center mb-4">				
				<div class="social-icons w-100">
                    <ul class="w-50">
                        <li><i class="fab fa-google-plus-g"></i></li>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                    </ul>
				</div>
				<div class="justify-content-center mt-3 sign-up-btn-cont">
					<button type="submit" name="form_posted" class="btn btn-info w-100">Sign Up</button>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already have an account? <a href="login.html" class="ml-2">Log In</a>
					</div>
				</div>
				</form>							
		</div>		
	</div>
</div>    
	
	
    <script src="https://kit.fontawesome.com/325897fa15.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
</body>
</html>

<?php

	require_once('DBconnect.php');
	$db = new DBconnect();
	
	if(isset($_POST['form_posted'])) 
	{
	$full_name = $_POST['fname'];
	$user_name = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$cpassword = $_POST['cpass'];

	$pass = password_hash($password,PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

	$checkemail = strval($email);
	$ans = $db->duplicateCheck($checkemail);	
	
	
	$data = array($full_name, $user_name, $email,$pass,$cpass);
	$Imsg = $db->addUserDB($data);
	
	
	if ($Imsg == 1) 
	{
		echo"<script>swal({
			title: 'Successfully Signuped',			
			icon: 'success',			
		  });</script>";			
	}
	else
	{
		echo"<script>alert('Record Not Added')</script>";
	} 
	}
?>