<?php 

include("dbconnection.php");

$putovanje_id = $_REQUEST['putovanje_id'];
$ruta_id = $_REQUEST['ruta_id'];
$datum_polaska = $_REQUEST['datum_polaska'];
$datum_dolaska = $_REQUEST['datum_dolaska'];


if(!empty($putovanje_id) && !empty($ruta_id) && !empty($datum_polaska) && !empty($datum_dolaska)){

    $statement = $mysqli->prepare("INSERT INTO putovanja(putovanje_id, ruta_id, datum_polaska, datum_dolaska) VALUES (?, ?, ?, ?)");

    $statement->bind_param("ssss", $putovanje_id, $ruta_id, $datum_polaska, $datum_dolaska);

    if($statement->execute()){
        header("Location: ../dodajPutovanja.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>