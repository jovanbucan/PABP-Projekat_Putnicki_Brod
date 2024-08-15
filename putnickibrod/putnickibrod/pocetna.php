<?php
include("php/dbconnection.php");
session_start();

if (!isset($_SESSION["email"])) {
    die(header("Location: ../index.php?error=2"));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Korisnik</title>
</head>

<style>
    body {
        background-image: url('img/putovanje.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
    }

    .card-header, .card-footer {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .card-body {
        background-color: rgba(0, 0, 0, 0.5);
    }

</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Dobrodošli</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mx-1" href="rute.php" style="color: white;">Rute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mx-1" href="putovanja.php" style="color: white;">Putovanja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mx-1" href="putnici.php" style="color: white;">Putnici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mx-1" href="kabine.php" style="color: white;">Kabine</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-white">
                    <h3 class="card-header text-center">Vaši podaci</h3>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo htmlspecialchars($_SESSION['ime']) . ' ' . htmlspecialchars($_SESSION['prezime']); ?>
                        </h5>
                        <p class="card-text">Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-primary">
                            <a href="php/logout.php">Logout</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
