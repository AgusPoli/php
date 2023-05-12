<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);
$aPacientes[] = array(
    "dni" => "11.568.778",
    "nombre" => "Martín Perez",
    "edad" => 26,
    "peso" => 77,
);
$aPacientes[] = array(
    "dni" => "17.628.738",
    "nombre" => "Maria Zarate",
    "edad" => 65,
    "peso" => 77,
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Clinica</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <h1>Listado de pacientes</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <thead>
                            <th>DNI</th>
                            <th>Nombre y apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                            
                        </thead>
                        <tbody>
                            <?php foreach($aPacientes as $paciente) {?>
                            <tr>
                                <td><?php echo $paciente["dni"];?></td>
                                <td><?php echo $paciente["nombre"];?></td>
                                <td><?php echo $paciente["edad"];?></td>
                                <td><?php echo $paciente["peso"];?></td>
                            </tr>
                            <?php } ?>

                        </tbody>

                    </table>
                </div>
            </div>


        </div>

    </main>
    
</body>
</html>