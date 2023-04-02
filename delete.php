<?php
include_once("log.php");
include_once("connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

}

$sql = "DELETE FROM ksiazki WHERE id = '$id';";
if( $conn -> query($sql) === TRUE){
    echo "nie ma ";
    
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
header("location: panel.php");

?>