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
				<img src="images/team.png" class="brand_logo" alt="Logo">
			</div>
		</div>
		<div class="form-container mb-5 mr-auto ml-auto">	
			<form class="w-100" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
				<div class="form-row">
					<div class="form-group col-md-6">					  
					  <input type="text" class="form-control" placeholder="Full Name" name="fname" required>
					  <span class="error" id="fname-error">*Enter only alphabets</span>
					</div>
					<div class="form-group col-md-6">					  
					  <input type="text" class="form-control" placeholder="User name" name="uname" required>					  
					  <span class="error" id="uname-error">*User Name cannot have (-,@,!,/)</span>
					</div>
				  </div>                  
				<div class="form-row">
					<div class="form-group col-md-12">					  
					  <input type="email" class="form-control" placeholder="Email" name="email" required>
					  <span class="error" id="email-error">*Write Correct Email.</span>
					</div>					
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">					  
						<input type="password" class="form-control" placeholder="Password" name="pass" required>						
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">					  
						<input type="password" class="form-control" placeholder="Confirm Password" name="cpass" required>
						<span class="error" id="pass-error">*password doesn't match</span>
					</div>
				</div>	
				<div class="form-row">
                    <div class="form-group col-md-6">
						<input type="text" class="form-control" placeholder="Shop Name / Brand Name" name="shopname" required>
						<span class="error" id="shop-error">*Shop Name doesn't have(@,!,-) etc.</span>
                    </div>
                    <div class="form-group col-md-6">
						<input type="text" class="form-control" placeholder="Website (Optional)" name="webname">
						<span class="error" id="web-error">*url ain't right</span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
						<input type="text" class="form-control" placeholder="Business Address" name="baddress" required>						
						<span class="error" id="b-error">*No special Characters</span>
                    </div>
                </div>
							  				  				  				 
				<div class="form-group mt-3">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" name="checkbox" class="custom-control-input" id="confirmationBox">
						<label class="custom-control-label" for="confirmationBox">I accept the Term of use & policy</label>
						<span class="error" id="check-error">*Please Confirm</span>
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
						Already have an account? <a href="login.php" class="ml-2">Log In</a>
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
		if(preg_match("/^[a-zA-Z ]*$/",$_POST['fname']))
		{
			$full_name = $_POST['fname'];
		}
		else
		{
			echo"<script>$('#fname-error').css('display','block')</script>";
			
		}
		

		if(preg_match("/^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9-]){3,}[a-zA-Z0-9]$/",$_POST['uname']))
		{
			$user_name = $_POST['uname'];
		}
		else
		{
			echo"<script>$('#uname-error').css('display','block')</script>";
			
		}

		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$email = $_POST['email'];
		}
		else
		{
			echo"<script>$('#email-error').css('display','block')</script>";			
		}

		if( $_POST['pass'] == $_POST['cpass'])
		{
			$password = $_POST['pass'];
			$cpassword = $_POST['cpass'];
			$pass = password_hash($password,PASSWORD_BCRYPT);
			$cpass = password_hash($cpassword,PASSWORD_BCRYPT);			
		}
		else
		{
			echo"<script>$('#pass-error').css('display','block')</script>";			
		}
		if(!isset($_POST['checkbox']))
		{
			echo"<script>$('#check-error').css('display','block')</script>";	
			exit();		
		}
		
		if(preg_match("/^[a-zA-Z ]*$/",$_POST['shopname']))
		{
			$shop_name = $_POST['shopname'];
		}
		else
		{
			echo"<script>$('#shop-error').css('display','block')</script>";
			
		}

		if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/",$_POST['webname']))
		{
			$web_name = $_POST['webname'];
		}
		else
		{
			echo"<script>$('#web-error').css('display','block')</script>";			
		}
		

		if(preg_match("/^[#.0-9a-zA-Z\s,-]+$/",$_POST['baddress']))
		{
			$baddress_name = $_POST['baddress'];
		}
		else
		{
			echo"<script>$('#b-error').css('display','block')</script>";			
		}
		
		
		
	
	$data = array($full_name, $user_name, $email,$pass,$cpass,$shop_name,$web_name,$baddress_name);
	$Imsg = $db->addSellerDB($data);
	
	if ($Imsg == 1) 
	{
		echo"<script>window.location.href='login.php?state=1'</script>";						
	}
	
	}
?>