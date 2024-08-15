<?php
include("dbconnection.php");

$putnik_id = $_POST['putnik_id'];
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$datum_rodjenja = $_POST['datum_rodjenja'];
$pol = $_POST['pol'];

if(!empty($putnik_id) && !empty($ime) && !empty($prezime) && !empty($datum_rodjenja) && !empty($pol)) {

    $statement = $mysqli->prepare("UPDATE putnici SET ime=?, prezime=?, datum_rodjenja=?, pol=? WHERE putnik_id=?");

    $statement->bind_param("ssssi", $ime, $prezime, $datum_rodjenja, $pol, $putnik_id);

    if ($statement->execute()) {
        header("Location: ../putnici.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error);
    }
}
?>
