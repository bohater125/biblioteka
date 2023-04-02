<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Logowanie</title>


</head>

<body>
    <form method="POST" >
        <input type="text" placeholder="login" name="login" required>
        <br>
        <input type="password" placeholder="haslo" name="haslo" required>
        <br>
        <button type="submit" name="submit">Zaloguj<i class="fa fa-sign-in"></i></button>
    </form>
    <?php

if(isset($_POST["login"])){
    $login = $_POST["login"];
}
if(isset($_POST["login"])){
    $haslo = $_POST["haslo"];
}

if(isset($_POST["submit"])){
    session_start();
    $poprawnylogin = $_SESSION["poprawnylogin"] = "admin";
    $poprawnehaslo = $_SESSION["poprawnehaslo"] = "123";
    if($_SESSION["poprawnylogin"] == $login && $_SESSION["poprawnehaslo"] == $haslo) {
        header("location: panel.php");

    } else {
        echo "<p class='zinfo'>Podałeś złe dane, spróbój jeszcze raz.</p>";
    }

}

?>
</body>

</html>