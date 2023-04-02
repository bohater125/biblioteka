<?php 
session_start();
if(isset($_SESSION["poprawnylogin"]) && $_SESSION["poprawnylogin"] == "admin"){
    // echo "witaj ".$_SESSION["poprawnylogin"];
} else {
    header("location: login.php");
}


?>