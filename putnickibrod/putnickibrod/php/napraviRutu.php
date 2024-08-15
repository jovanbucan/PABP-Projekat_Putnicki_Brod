<?php 

include("dbconnection.php");

$ruta_id = $_REQUEST['ruta_id'];
$polazna_luka = $_REQUEST['polazna_luka'];
$odredisna_luka = $_REQUEST['odredisna_luka'];
$trajanje_dana = $_REQUEST['trajanje_dana'];

if(!empty($ruta_id) && !empty($polazna_luka) && !empty($odredisna_luka) && !empty($trajanje_dana)){
    $statement = $mysqli->prepare("INSERT INTO rute(ruta_id, polazna_luka, odredisna_luka, trajanje_dana) VALUES (?, ?, ?, ?)");

    $statement->bind_param("ssss", $ruta_id, $polazna_luka, $odredisna_luka, $trajanje_dana);

    if($statement->execute()){
        header("Location: ../dodajRutu.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>