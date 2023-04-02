<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dodawanie</title>
</head>

<body>
    <?php
include_once("log.php");
include_once("connection.php");
?>

    <form method="post">
        <input type="text" name="autor" placeholder="autor" required><br>
        <input type="text" name="tytul" placeholder="tytul" required><br>
        <input type="text" name="rokWydania" placeholder="rok wydania" required><br>
        <button type="submit" name="insert"><i class="fa fa-plus"></i>Dodaj</button>
    </form>

    <?php
if(isset($_POST['insert'])){
    if(isset($_POST['tytul'])){
        $tytul = $_POST['tytul'];
    }
    if(isset($_POST['autor'])){
        $autor = $_POST['autor'];
    }
    if(isset($_POST['rokWydania'])){
        $rokWydania = $_POST['rokWydania'];
    }

    $sql2 = "INSERT INTO ksiazki VALUES ('','$tytul', '$autor', '$rokWydania')";

    if($conn->query($sql2) === TRUE){
        echo "Dodano";
        header("location: panel.php");
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
}
?>


</body>

</html>