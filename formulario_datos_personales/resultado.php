<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if($_POST){
    $nombre= $_POST["txtNombre"];
    $dni= $_POST["txtDni"];
    $telefono= $_POST["txtTelefono"];
    $edad= $_POST["txtEdad"];

   
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Datos personales</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Resultado de Formulario</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                    </tr>
                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $dni; ?></td>
                        <td><?php echo $telefono; ?></td>
                        <td><?php echo $edad; ?></td>
                    </tr>
                </table>
            </div>
        </div>





    </main>

    
</body>
</html>