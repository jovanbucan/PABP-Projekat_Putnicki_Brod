<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nova Kabina</title>
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
                        <h2>Dodaj Novu Kabinu</h2>
                    </div>
                    <div class="card-body">
                        <form action="php/napraviKabinu.php" method="post">
                            <div class="form-group">
                                <label for="kabina_id">KabinaID:</label>
                                <input type="number" id="kabina_id" name="kabina_id" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="broj_kabine">Broj Kabine:</label>
                                <input type="text" id="broj_kabine" name="broj_kabine" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tip_kabine">Tip Kabine:</label>
                                <input type="text" id="tip_kabine" name="tip_kabine" required class="form-control">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary"><a href="kabine.php">Nazad</a></button>
                                <button type="submit" class="btn btn-primary">Dodaj Kabinu</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <?php
                        if (isset($_REQUEST["success"]) && $_REQUEST["success"] == 1) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo 'Uspesno dodata kabina!';
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
