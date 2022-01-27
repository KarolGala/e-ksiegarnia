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
	<link rel="stylesheet" type="text/css" href="assets/css/settings.css">
	<title>E-księgarnia</title>
</head>

<body>
<?php include("includes/navBarContainer.php"); ?>	
<div id="mainContainer">

	<div id="topContainer">

		<div id="mainViewConteiner">
			<div id="mainContent" style="margin-left: 220px;">

              
                    <?php
                        if(isset($_GET['id'])) {
                            $bookId = $_GET['id'];
							$bookId2 = $_GET['id'];

							
                        }
                        else {
                            header("Location: index.php");
                        }

						
                        $bookQuery = mysqli_query($con, "SELECT * FROM books WHERE id='$bookId'");
                        $book =mysqli_fetch_array($bookQuery);

                        $bookId = $book['author'];
                       
                        $authorQuery = mysqli_query($con, "SELECT * FROM author WHERE id='$bookId'");
                        $author = mysqli_fetch_array($authorQuery);
						
                    ?>
					<div class="profileCard" >
                    
					<h1 class="profileCardTitle" > <?php echo $author['name'], ': ', $book['title'];?> 
					
					
					
					</a></h1>
			   
				
					 <img id="bookImg"  src=" <?php echo $book['path']; ?>"> 
					 <form method="post" action="wypozyczButton.php">
						<button type="submit" name="submitButton">Książka o ID: <input class="inputStyle" type="text" name="ksiazka" value="<?php echo $bookId2  ?> "> wypozycz</button>
						<button type="submit" name="oddajButton">Książka o ID:<input class="inputStyle" type="text" name="ksiazka" value="<?php echo $bookId2  ?> "> Oddaj </button>
						</form>							
					
					</div>

			</div>
		</div>

		
	
	</div>
</div>
</body>

</html>