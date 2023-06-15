<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// OBJETIVO = CREAR UNA TABLA DONDE SE PUEDAN AGREGAR LOS DATOS DE CLIENTES MEDIANTE EL FORMULARIO (FUNCION $_SESSION)

session_start();


if(isset($_SESSION["listadoClientes"])){
    //Si existe la variable de session listadoClientes asigno lo que haya en el a aClientes
    $aClientes= $_SESSION["listadoClientes"];
}else {
    $aClientes = array();

}


// PASO 1 = Abrir un IF cuando el formulario sea POST (Se envie)
if ($_POST){

    // Si se clickea el Boton Enviar que haga los pasos 2 y 3
    if(isset($_POST["btnEnviar"])){

    // PASO 2 = Asignarle valores a los datos del formulario
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    //PASO 3 = Creamos un array que contendra el listado de los clientes
    $aClientes[] = array("nombre" => $nombre, "dni" => $dni, "telefono" => $telefono, "edad"=> $edad);

    //Actualiza el contenido del array 
    $_SESSION["listadoClientes"] = $aClientes;

    }

    // Si se clickea el boton Eliminar destruira los datos guardados en la sesion y deja aClientes en blanco
    if (isset($_POST["btnEliminar"])){
        session_destroy();
        $aClientes = array();
    }

}


//Si es GET, osea que hay un dato en la url/query (el dato fue incorporado con el "A" / Hipervinculo)
if(isset($_GET["pos"])){
    // Recupera el dato que viene desde la query (despues de hacer click en el "A / Hipervinculo")
    $pos = $_GET["pos"];
    // Elimina la posicion la funcion unset
    unset($aClientes[$pos]);
    // Actualiza la variable de session con los cambios realizados
    $_SESSION["listadoClientes"] = $aClientes;
    // Redirecciona a la url limpia,sin el GET
    header("Location: clientes_session1.php");
}

// PASO 4 = Para que se repita el proceso cada vez que agreguemos algo al formulario creamos el FOREACH (Linea 79 a 88)
// PASO 5 = Mostramos en la tabla los datos mediante ECHOS (Mismas lineas dentro del FOREACH)

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="class-12 py-5 text-center">
                <h1>Listado de clientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <form action="" method="POST">
                    <div class="pb-3">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Ingrese el nombre y apellido">
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">DNI:</label>
                        <input type="number" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtEdad">Edad:</label>
                        <input type="number" name="txtEdad" id="txtEdad" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
                        <button type="submit" class="btn btn-danger" name="btnEliminar">Eliminar</button>
                        
                    </div>
                </form>

            </div>
            <div class="col-8 pt-2 px-5">
                <table class="table table-hover border shadow">
                    <thead>

                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Telefono:</th>
                            <th>Edad:</th>
                            <th></th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($aClientes as $pos => $datos){ ?>
                        <tr>
                            <td><?php echo $datos["nombre"]; ?></td>
                            <td><?php echo $datos["dni"]; ?></td>
                            <td><?php echo $datos["telefono"]; ?></td>
                            <td><?php echo $datos["edad"]; ?></td>
                            <td><a href="clientes_session1.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></a></td>

                        </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </main>
    
</body>
</html>