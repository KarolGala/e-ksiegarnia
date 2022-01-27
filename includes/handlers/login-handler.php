<?php

if(isset($_POST['loginButton'])) {
	//Login button was pressed
	$username = $_POST['loginUsername']; //zmienna $username ma teraz wartość którą użytkownik wpisał w polu formularza LOGIN  
	$password = $_POST['loginPassword']; 
	
	$result = $account->login($username, $password); 
	if($result == true){
		$_SESSION['userLoggedIn'] = $username; //rozpocznij sesje - zapamiętaj ,że uzytkownik jest zalogowany
		header("Location: index.php"); // jezeli logowanie się udało/sesja sie rozpoczeła ---> przekieruj na strone index.php
	}
} 


?>



