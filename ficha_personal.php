<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("America/Argentina/Buenos_Aires");

$nombre = "Agustin Polidor";
$edad= 22;
$aPeliculas= array("El hobbit","Percy Jackson","Harry Potter");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Ficha personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo date("d/m/Y"); ?></td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre;?></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad;?></td>
                    </tr>
                    <tr>
                        <th>Peliculas favoritas:</th>
                        <td><?php echo $aPeliculas[0];?><br>
                            <?php echo $aPeliculas[1];?><br>
                            <?php echo $aPeliculas[2];?>

                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </main>
</body>

</html>