<?php 
    class Account {
        private $con;
        private $errorArray;

        public function __construct($con){
            $this->con = $con;
            $this->errorArray = array();
        }

        public function login($un, $pw){
            $pw = md5($pw); //rozszyfrowanie hasła z bazy danych
            $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'"); //sprawdź czy isnieje taki użytkownik w tabeli
            if(mysqli_num_rows($query) == 1) {  // jeżeli znalał się 1 taki wynik w tabeli to...
            return true;
            }
            else{
                array_push($this->errorArray, Constants::$loginFailed);
                return false;

            }
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
           $this->validateUsername($un);
           $this->validateFirstName($fn);
           $this->validateLastName($ln);
           $this->validateEmails($em, $em2);
           $this->validatePasswords($pw, $pw2);
           
           if (empty($this->errorArray) == true){
               //insert into db if everything is ok 
               return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
           }
           else{
               return false;
           }

        }

        public function getError($error) {
            if(!in_array($error, $this->errorArray)) {
                $error="";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        public function insertUserDetails($un, $fn, $ln, $em, $pw){
            $encryptedPw = md5($pw);  //funkcja która szyfruje hasło
            $profilePic = "assets\images\profile-picshead_emerald.png";
            $date = date("Y-m-d");
            $result = mysqli_query($this->con, "INSERT INTO  users VALUES('', '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')");
            return $result; 
        }

        private function validateUsername($un){
             if(strlen($un) > 25 || strlen($un) < 5) //jeżeli nazwa użytkownika większa niż 25 lub mniejsza niż 5...
             {
                array_push($this->errorArray,  Constants::$usernameCharacters);
                return;
             }

             $checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'"); // Wybierz uzytkowników z bazy danych
             if(mysqli_num_rows($checkUsernameQuery) != 0){                                                     //jezeli taki uzytkownik juz istnieje = errorArray -> $usernameTaken 
                 array_push($this->errorArray, Constants::$usernameTaken);                                      
                 return;
             }
            


        }
    
        private function validateFirstName($fn){ //jezeli imię dłuższe niż 25 i krótsze niż 3 ...
            if(strlen($fn) > 25 || strlen($fn) < 3) {
               array_push($this->errorArray, Constants::$firstNameCharacters); 
               return;
            }
        }
        
        private function validateLastName($ln){
            if(strlen($ln) > 25 || strlen($ln) < 3) {
                array_push($this->errorArray, Constants::$lastNameCharacters);
                return;
            }
        }
    
        private function validateEmails($em, $em2){ //jezeli wpisane emaile w pierwszym i drugim polu nie takie same to-> error "$emailsDoNotMatch"
            if($em != $em2 ){
            array_push($this->errorArray, Constants::$emailsDoNotMatch);
            return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){ //funkcja php która sprawdza czy wpisany email ma poprawna składnie i konczy sie .pl/.com/.de itd.
            array_push($this->errorArray, Constants::$emailInvalid);
            return;
            }

            $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'"); // Wybierz uzytkowników z bazy danych
            if(mysqli_num_rows($checkEmailQuery) != 0){                                               //jezeli taki uzytkownik juz istnieje = errorArray -> $usernameTaken 
            array_push($this->errorArray, Constants::$emailTaken);                                      
            return;
            }
        }
    
        private function validatePasswords($pw, $pw2){ //jezeli wpisane hasła w pierwszym i drugim polu nie takie same to-> error "$passwordsDoNotMatch"
            if($pw != $pw2 ){
                array_push($this->errorArray, Constants::$passwordsDoNoMatch);
                return;
                }
                if(preg_match('/[^A-Za-z0-9]/', $pw)) { //hasło może zawierac tylko literki od A-Z , a-z , i cyfry od 0-9 
                array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
                return;
                }
                if(strlen($pw) > 30 || strlen($pw) < 8) { // hasło może mieć od 8 do 30 znaków
                    array_push($this->errorArray, Constants::$passwordCharacters);
                    return;
                }
        }

        

    }

?>