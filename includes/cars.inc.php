
    <?php
    include_once 'database.php';
    $ime = $_POST["ime"];
    $model = $_POST["model"];
    $godina = $_POST["godina"];
    $cena = $_POST["cena"];


    $sql = "INSERT INTO kola (kolaime, kolamodel, kolagodina, kolacena) VALUES ('$ime', '$model', '$godina', '$cena');";
    mysqli_query($conn, $sql); 
    
    header("Location: ../cars.php");

    
    
