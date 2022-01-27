<?php 
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");
$account= new Account($con);
		

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
	<link rel="shortcut icon" href="assets/images/icons/favicon.ico" />

	<title>E-księgarnia</title>
</head>
<body>

 <?php

	if(isset($_POST['registerButton'])) { 
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	}
	else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}
?>



<div id="background">
	
	<div id="inputContainer">			
		<div id="loginContainer">	
	<!---------------------formularz do zalogowania ------------------------------------------------------------------->
		
			<form id="loginForm" action="register.php" method="POST">
					<h2>Zaloguj się na swoje konto</h2>

					<p> 
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Login</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="Nazwa użytkownika" required>
					</p>

					<p>
						<label for="loginPassword">Hasło</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Hasło" required>
					</p>
					<button type="submit" name="loginButton">Zaloguj</button>
					<div class="hasAccountText">
						<span id="hideLogin">Nie masz konta? Zarejestruj się.</span>
					</div>
			</form>

		
	
	<!---------------------formularz zarejstrowania się ---------------------------------------------------------------->
			<form id="registerForm" action="register.php" method="POST">
					<h2>Utwórz nowe konto</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Login</label>
						<input id="username" name="username" type="text" placeholder="Nazwa użytkownika" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">Imię</label>
						<input id="firstName" name="firstName" type="text" placeholder="Jan" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Nazwisko</label>
						<input id="lastName" name="lastName" type="text" placeholder="Kowalski" required>
					</p>


					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">E-mail</label>
						<input id="email" name="email" type="e-mail" placeholder="jankowalski@gmail.pl" required>
					</p>


					<p>
						<label for="email2">Potwierdź E-mail</label>
						<input id="email2" name="email2" type="e-mail" placeholder="jankowalski@gmail.pl" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Hasło</label>
						<input id="password" name="password" type="password" placeholder="Hasło" required>
					</p>

					<p>
						
						<label for="password2">Potwierdź hasło</label>
						<input id="password2" name="password2" type="password" placeholder="Potwierdź hasło" required>
					</p>
					<button type="submit" name="registerButton">Zarejestruj</button>
							<div class="hasAccountText">
									<span	span id="hideRegister">Masz już konto? Zaloguj się.</span>
							</div>
			</form>
		</div>

	</div>

	<div id="loginText">
			<h1>Wypożycz swoje ulubione książki, tu i teraz!</h1>
			<h2>Po co zakładać konto?</h2>
			<ul>
				<li> Przeglądanie książek dostępnych do wypożyczenia</li>
				<li>Wypożyczanie książek na swoje, zalogowane konto</li>
				<li>Zwracanie książek</li>
			</ul>
	</div>

</div>
</body>
</html>


