

<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Registreren</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
			

				<form method="post" action="register.php" class="login100-form validate-form">
					<span class="login100-form-title">
					 Registeren
					</span>
					
					<?php echo display_error(); ?>

					<div class="wrap-input100 validate-input" data-validate = "Gebruikersnaam is vereist">
						<input value="<?php echo $username; ?>" class="input100" type="text" name="username" placeholder="Gebruikersnaam">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "E-mail is vereist">
						<input value="<?php echo $email; ?>" class="input100" type="email" name="email" placeholder="E-mail" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-at" aria-hidden="true"></i>
						</span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Wachtwoord is vereist">
						<input class="input100" type="password" name="password_1" placeholder="Password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Wachtwoord is vereist">
						<input class="input100" type="password" name="password_2" placeholder="Password Bevestigen" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="register_btn" class="login100-form-btn">
							Registeren
						</button>
					</div>

					<!--<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>-->

					<div class="text-center p-t-136">
						<a href="login.php" class="txt2" href="#">
							Al een account? Login in!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

