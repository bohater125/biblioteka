<?php
include_once("log.php");
include_once("connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "SELECT * FROM ksiazki WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $tytul = $row['tytul'];
    $autor = $row['autor'];
    $rokWydania = $row['rokWydania'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edycja-</title>
</head>

<body>

    <form method="post">

        <input type="text" name="autor" placeholder="autor" class="in" value="<?php echo $autor; ?>" required><br>
        <input type="text" name="tytul" placeholder="tytul" class="in" value="<?php echo $tytul; ?>" required><br>
        <input type="text" name="rokWydania" placeholder="rok wydania" class="in" value="<?php echo $rokWydania; ?>"
            required><br>
        <button type="submit" name="edit">Edytuj<i class='far fa-edit fa-xs'></i> </button>

    </form>
    <?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

}

if(isset($_POST['edit'])){ 
    if(isset($_POST['tytul'])){
        $tytul = $_POST['tytul'];
    }
    if(isset($_POST['autor'])){
        $autor = $_POST['autor'];
    }
    if(isset($_POST['tytul'])){
        $rokWydania = $_POST['rokWydania'];
    }
}   


$sql = "UPDATE ksiazki SET tytul = '$tytul', autor = '$autor', rokWydania = '$rokWydania' WHERE id = '$id'";
if( $conn -> query($sql) === TRUE){
    // echo "Zaktualizowano";
    
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if(isset($_POST['edit'])){ 
    header("location: panel.php");
}

?>
</body>

</html>