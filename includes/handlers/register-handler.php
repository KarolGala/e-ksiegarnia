<?php 

	function sanitizeFormPassword ($inputText) {
		$inputText = strip_tags($inputText); //funkcja PHP która usuwa tagi HTML i PHP z ciągu znaków
		return $inputText;
	}


	function sanitizeFormUsername ($inputText) {
		$inputText = strip_tags($inputText); //funkcja PHP która usuwa tagi HTML i PHP z ciągu znaków
		$inputText = str_replace(" ", "", $inputText); //funkcja która wyszukuje spacje i je "usuwa"
		return $inputText;
	}



	function sanitizeFormString ($inputText) {
		$inputText = strip_tags($inputText); //funkcja PHP która usuwa tagi HTML i PHP z ciągu znaków
		$inputText = str_replace(" ", "", $inputText); //funkcja która wyszukuje spacje i je "usuwa"
		$inputText = ucfirst(strtolower($inputText)); // wszystkie litery oprócz pierwszej mają być z małej
		return $inputText;
	}




	if(isset($_POST['registerButton'])) // jeżeli został naciśniety przycisk zarejestruj zrób...
	 {
		 $username = sanitizeFormUsername($_POST['username']); 
		 $firstName = sanitizeFormString($_POST['firstName']); 
		 $lastName = sanitizeFormString($_POST['lastName']); 
		 $email = sanitizeFormString($_POST['email']);
		 $email2 = sanitizeFormString($_POST['email2']); 
		 $password = sanitizeFormPassword($_POST['password']); 
		 $password2 = sanitizeFormPassword($_POST['password2']); 

		$wasSuccesful =	$account->register( $username, $firstName, $lastName, $email, $email2, $password, $password2);
		if($wasSuccesful == true){
			$_SESSION['userLoggedIn'] = $username; //rozpocznij sesje - zapamiętaj ,że uzytkownik jest zalogowany
			header("Location: index.php");
		}




	} 

?>