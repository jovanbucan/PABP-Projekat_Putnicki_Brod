<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nov Putnik</title>
</head>

<style>
    body {
        background-image: url('img/putovanje.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        color: white;
    }
</style>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card text-white bg-dark">
                    <div class="card-header text-center">
                        <h2>Dodaj Novog Putnika</h2>
                    </div>
                    <div class="card-body">
                        <form action="php/napraviPutnika.php" method="post">
                            <div class="form-group">
                                <label for="putnik_id">PutnikID:</label>
                                <input type="number" id="putnik_id" name="putnik_id" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ime">Ime:</label>
                                <input type="text" id="ime" name="ime" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="prezime">Prezime:</label>
                                <input type="text" id="prezime" name="prezime" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="datum_rodjenja">Datum Rodjenja:</label>
                                <input type="date" id="datum_rodjenja" name="datum_rodjenja" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pol">Pol:</label>
                                <input type="text" id="pol" name="pol" required class="form-control">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary"><a href="putnici.php">Nazad</a></button>
                                <button type="submit" class="btn btn-primary">Dodaj Putnika</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <?php
                        if (isset($_REQUEST["success"]) && $_REQUEST["success"] == 1) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo 'Uspesno dodat putnik!';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
