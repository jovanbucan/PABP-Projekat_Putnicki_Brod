<?php 

include("dbconnection.php");

$kabina_id = $_REQUEST['kabina_id'];
$broj_kabine = $_REQUEST['broj_kabine'];
$tip_kabine = $_REQUEST['tip_kabine'];

if(!empty($kabina_id) && !empty($broj_kabine) && !empty($tip_kabine)){

    $statement = $mysqli->prepare("INSERT INTO kabine(kabina_id, broj_kabine, tip_kabine) VALUES (?, ?, ?)");

    $statement->bind_param("sss", $kabina_id, $broj_kabine, $tip_kabine);

    if($statement->execute()){
        header("Location: ../dodajKabinu.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>