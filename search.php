<?php 
include("includes\config.php");
		//session_destroy();
		//TODO: zrobic wylogowanie i przekierowanie na strone register.php po wylogowaniu

		if(isset($_SESSION['userLoggedIn'])){ //jeżeli jest rozpoczęta sesja 
			$userLoggedin = $_SESSION['userLoggedIn']; //przekieruj na strone index.php
		}
		else{
			header("Location: register.php"); //jeżeli logowanie się nie udało/przkieruj na stronę register.php
		}

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<title>E-księgarnia</title>
</head>

<body>
	<?php include("includes/navBarContainer.php"); ?>


<div id="mainContainer">

	<div id="topContainer">

		<div id="mainViewConteiner">
			<div id="mainContent" >
			<?php
					//TODO: Wyszukiwarka książek i autorów

				if(isset($_GET['term'])) {
					$term = urldecode($_GET['term']);
				}
				else {
					$term = "";
				}
			?>

				


			</div>
		</div>

	
	
	</div>
</div>
</body>

</html>