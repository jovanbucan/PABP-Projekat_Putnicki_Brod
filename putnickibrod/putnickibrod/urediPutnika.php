<?php
include("php/dbconnection.php");

if (isset($_GET['putnik_id'])) {
    $putnik_id = $_GET['putnik_id'];
    $query = $mysqli->query("SELECT * FROM putnici WHERE putnik_id = $putnik_id");
    $data = $query->fetch_object();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi Putnika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Uredi Putnika</h2>
        <form action="php/azurirajPutnika.php" method="POST">
            <input type="hidden" name="putnik_id" value="<?php echo $data->putnik_id; ?>">
            <div class="form-group">
                <label for="putnik_id">PutnikID:</label>
                <input type="text" class="form-control" id="putnik_id" name="putnik_id" value="<?php echo $data->putnik_id; ?>">
            </div>
            <div class="form-group">
                <label for="ime">Ime:</label>
                <textarea class="form-control" id="ime" name="ime"><?php echo $data->ime; ?></textarea>
            </div>
            <div class="form-group">
                <label for="prezime">Prezime:</label>
                <textarea class="form-control" id="prezime" name="prezime"><?php echo $data->prezime; ?></textarea>
            </div>
            <div class="form-group">
                <label for="datum_rodjenja">Datum Rodjenja:</label>
                <input type="date" class="form-control" id="datum_rodjenja" name="datum_rodjenja" value="<?php echo $data->datum_rodjenja; ?>">
            </div>
            <div class="form-group">
                <label for="pol">Pol:</label>
                <input type="text" class="form-control" id="pol" name="pol" value="<?php echo $data->pol; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMi6zOW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>