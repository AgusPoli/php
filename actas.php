<?php

$aEmpleados = array("nombre" =>"Ana Valle", "notas" => array(7,8));
$aEmpleados = array("nombre" =>"Bernabe Paz", "notas" => array(5,7));
$aEmpleados = array("nombre" =>"Sebastian Aguirre", "notas" => array(6,9));
$aEmpleados = array("nombre" =>"Monica Ledesma", "notas" => array(8,9));





function promediar($aNumeros){
    $suma= 0;
    foreach($aNumeros as $nota){
        $suma= $suma + $nota;

    }

    return $suma / 2;
    
}

echo "el promedio es" . promediar($aEmpleados) . "<br>";


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Actas de alumnos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Nombre</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </tr>

                    <tr>

                    </tr>

                </table>
            </div>
        </div>

    </main>
    
</body>
</html>