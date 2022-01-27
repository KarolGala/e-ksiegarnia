<?php 
    ob_start(); 
    session_start();
    $timezone = date_default_timezone_set("Europe/Berlin");
    $con = mysqli_connect("localhost", "root", "", "e-ksiegarnia");

    if(mysqli_connect_errno())
    echo "Połączenie się nie powiodło:"; 


?>