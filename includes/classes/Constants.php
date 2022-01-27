<?php
class Constants {
    //---------------------------------------register errors------------------------------------------
    public static $usernameCharacters = "Twoja nazwa użytkownika powinna zawierać od 5 do 25 znaków";
    public static $firstNameCharacters = "Imię nie może być krótsze niż 3 i dłuższe niż 25 liter";
    public static $lastNameCharacters = "Nazwisko nie może być krótsze niż 3 i dłuższe niż 25 liter";
    public static $emailInvalid = "niepoprawna składnia E-mail";
	public static $emailsDoNotMatch = "podane E-maile nie są takie same";
	public static $passwordsDoNoMatch = "podane hasła nie są takie same";
	public static $passwordNotAlphanumeric = "twoje hasło może się składać tylko z liter i cyfr";
	public static $passwordCharacters = "Hasło nie może być krótsze niż 8 i dłuższe niż 30 znaków";
    public static $usernameTaken = "Już istnieje użytkownik z takim loginem";
    public static $emailTaken = "Już istnieje użytkownik z takim emailem";
    //---------------------------------------login errors------------------------------------------
    public static $loginFailed = "Błędny login lub hasło";
	
	
	
	

}
?>