<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webiste | Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container h-100">    
		<h1 class="text-center heading-page">Login</h1>    
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">				
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container animate__animated animate__slideInDown">
						<img src="images/user.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				
				<div class="d-flex justify-content-center form_container">
					<form class="w-100 ml-4 mr-4">                       
						<div class="form-group mb-3">                            						
							<input type="email" name="" class="form-control" value="" placeholder="Email">
						</div>
						<div class="form-group mb-2">	                    
							<input type="password" name="" class="form-control" value="" placeholder="password">
						</div>
						<div class="form-group mt-3">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
                        </div>                        
					<div class="d-flex justify-content-center mt-3 mb-4">
				 	<button type="button" name="button" class="btn btn-info w-100">Login</button>
                   </div>
                   <hr class="text-center pt-3">
                                      
                   <div class="social-icons w-100">
                    <ul class="w-75">
                        <li><i class="fab fa-google-plus-g"></i></li>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-linkedin-in"></i></li>
                    </ul>
                </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="signup.html" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="https://kit.fontawesome.com/325897fa15.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>