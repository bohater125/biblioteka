<?php 
include_once("log.php")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Panel <?php echo $_SESSION["poprawnylogin"];?> </title>


</head>

<body>

    <div class="panel1">
        <a href="insert.php"><i class="fa fa-plus"></i>Dodaj</a>
        <a href="logout.php">Wyloguj<i class="fa fa-sign-out"></i></a>

    </div>
    </div>
    <table>


        <thead>
            <tr>
                <th>lp</th>
                <th>Autor</th>
                <th>Tytul</th>
                <th>Rok Wydania</th>
                <th>Działania</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once("connection.php"); 
                
                $sql1 = "SELECT * FROM ksiazki";
                $result = mysqli_query($conn, $sql1);
                $lp=1;
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        
                        echo "<tr><td>".$lp."</td><td>".$row['autor']."</td><td>".$row['tytul']."</td><td>".$row['rokWydania']."</td><td><a href=\"delete.php?id=".$row['id']."\"> Usuń 
                        <i class='far fa-trash-alt'></i></a> || <a href=\"edit.php?id=".$row['id']."\">Edytuj <i class='far fa-edit fa-xs'></i></a></td></tr>";                        
                        $lp++;
                    } 
                }else{
                    echo "brak uczniow";
                };

                ?>

        </tbody>
    </table>



</body>

</html>