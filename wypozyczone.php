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
	<link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/settings.css">
	<title>E-księgarnia</title>
</head>

<body>			
<?php include("includes/navBarContainer.php"); ?>	
			
<div id="mainContainer">
	<div id="topContainer">
		<div id="mainViewConteiner">
			<div id="mainContent">
			<h1 class="pageHeadingBig">Twoje wypożyczone ksiąźki</h1>
				<div class="profileCard">
				<div class="gridViewContainer">
<!---------------------------wypozyczone ksiazki--------------------------------------------------------------->
<?php	
				$booksQuery = mysqli_query($con, "SELECT wypozyczone.username , wypozyczone.bookId , books.id , books.title , books.author , books.path FROM wypozyczone , books WHERE books.id = wypozyczone.bookId AND wypozyczone.username = '$userLoggedin';");
				while($row = mysqli_fetch_array($booksQuery)) {
						
				echo "<div class='gridViewItem2'>
						<a href='book.php?id=" . $row['id'] . "'>
							<img id='gridImg' src='" . $row['path'] . "'>

							<div class='gridViewInfo'>"
							. $row['title'] .
							"</div>
						</a>
						</div>";
				}

	
?>
<!------------------------------------------------------------------------------------------------------------->
				</div>
				</div>	
            </div>
		</div>
    </div>
</div>
</body>

</html>