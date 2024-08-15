<?php
include("dbconnection.php");

if(isset($_GET['putnik_id'])) {
    $putnik_id = $_GET['putnik_id'];

    $statement = $mysqli->prepare("DELETE FROM putnici WHERE putnik_id = ?");
    $statement->bind_param("i", $putnik_id);

    if($statement->execute()) {
        header("Location: ../putnici.php");
    } else {
        echo "Greska prilikom brisanja putnika.";
    }

    $statement->close(); 
}
?>

<?php 