<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Rute</title>
</head>

<style>
    body {
        background-image: url('img/putovanje.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
    }
    .table-container {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 10px;
    }

    .table td, .table th {
        color: #000;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Rute</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mx-1" href="pocetna.php" style="color: white;">Početna Stranica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mx-1" href="dodajRutu.php" style="color: white;">Dodaj Rutu</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 table-container">
                <table class="table table-bordered table-striped table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Ruta</th>
                            <th scope="col">Polazna Luka</th>
                            <th scope="col">Odredišna Luka</th>
                            <th scope="col">Trajanje (Dana)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("./php/dbconnection.php");
                        $search_query = isset($_GET['search']) ? $_GET['search'] : '';
                        $sql = "SELECT * FROM rute";
                        $rezultat = $mysqli->query($sql);

                        while ($rez = mysqli_fetch_assoc($rezultat)) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($rez["ruta_id"]) . '</td>';
                            echo '<td>' . htmlspecialchars($rez["polazna_luka"]) . '</td>';
                            echo '<td>' . htmlspecialchars($rez["odredisna_luka"]) . '</td>';
                            echo '<td>' . htmlspecialchars($rez["trajanje_dana"]) . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
