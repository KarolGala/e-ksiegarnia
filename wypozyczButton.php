<?php
include("includes/config.php");

 $userLoggedin = $_SESSION['userLoggedIn']; //przekieruj na strone index.php



if(isset($_POST['submitButton']))
{
    $ksiazka = $_POST['ksiazka'];
     
    mysqli_query($con, "INSERT INTO `wypozyczone`(`id`, `username`, `bookId`) VALUES ('','$userLoggedin','$ksiazka') ");
    header("Location: wypozyczone.php"); 
}           

if(isset($_POST['oddajButton']))
{
    $ksiazka = $_POST['ksiazka'];
     
    mysqli_query($con, "DELETE FROM `wypozyczone` WHERE `bookId`='$ksiazka' AND `username`='$userLoggedin'; ");
    header("Location: wypozyczone.php"); 
}        
                  
                        
 ?>