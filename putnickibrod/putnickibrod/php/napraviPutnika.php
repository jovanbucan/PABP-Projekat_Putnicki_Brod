<?php 

include("dbconnection.php");

$putnik_id = $_REQUEST['putnik_id'];
$ime = $_REQUEST['ime'];
$prezime = $_REQUEST['prezime'];
$datum_rodjenja = $_REQUEST['datum_rodjenja'];
$pol = $_REQUEST['pol'];

if(!empty($putnik_id) && !empty($ime) && !empty($prezime) && !empty($datum_rodjenja) && !empty($pol)){

    $statement = $mysqli->prepare("INSERT INTO putnici(putnik_id, ime, prezime, datum_rodjenja, pol) VALUES (?, ?, ?, ?, ?)");

    $statement->bind_param("sssss", $putnik_id, $ime, $prezime, $datum_rodjenja, $pol);

    if($statement->execute()){
        header("Location: ../dodajPutnika.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>