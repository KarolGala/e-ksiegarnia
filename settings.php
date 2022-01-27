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


                        $userLoggedin = $_SESSION['userLoggedIn'];
						$userIdQuery = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedin'");
                        $userId =mysqli_fetch_array($userIdQuery);

                        
                         
                        

						
?>



<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/settings.css">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
	<title>E-księgarnia</title>
</head>

<body>
			
<?php include("includes/navBarContainer.php"); ?>	
			


<div id="mainContainer">

	<div id="topContainer">

		<div id="mainViewConteiner">
			<div id="mainContent">
<!---------------------------ProfileCard-------------------------------------------------------------------------->			
                <div class="profileCard">
                    
                        <h1 class="profileCardTitle" ><a href="settings.php" > <?php echo $_SESSION['userLoggedIn']; ?>
						</a></h1>
                   
                    
                        <ul>
                            <li class="profileCardInfo"> Imię:  <?php echo $userId['firstName']; ?>   </li>
                            <li class="profileCardInfo"> Nazwisko:  <?php echo $userId['lastName']; ?> </li>

                        </ul>    
                        <ul>
                            <li class="profileCardInfo"> E-mail:  <?php echo $userId['email']; ?> </li>
                            <li class="profileCardInfo"> Data utworzenia konta:  <?php echo $userId['signUpDate']; ?> </li>
                        </ul>   

                         
                        
                </div>
<!------------------------------------------------------------------------------------------------------------->
<!---------------------------Wypożyczone Książki--------------------------------------------------------------->
                    <div id="wrapperWypozyczone">
                        
                        <div  class="profileCard2">

                        
                            <h2>Zmień swoje dane</h2>

                            <form id="updateForm" action="#.php">
                                <input type="text" id="oldEmail" name="oldEmail" value="Obecny adres E-mail">
                                <input type="text" id="newEmail" name="newEmail" value="Nowy adres E-mail:">
                                <input type="submit" value="Zmień "></br>
                            </form>

                            <form>
                                <input type="text" id="oldPw" name="oldPw" value="Obecne Hasło">
                                <input type="text" id="newPw" name="newPw" value="Nowe Hasło">
                                <input type="submit" value="Zmień "></br>
                            </form>
                     
                            
                            







                        
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------->	
            </div>
		</div>
    </div>
</div>
</body>

</html>