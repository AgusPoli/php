<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




if($_POST) {
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    if($usuario !="" && $clave != ""){
        header("Location: acceso-confirmado.php");
    } else {
        $mensaje = "Valido para usuarios registrados";
    }


}



?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-6 py-5">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php if(isset ($mensaje)){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php } ?>    
                <form method="POST" action="">
                    <div class="pb-3">
                        <label for="txtUsuario">Usuario:</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>    
                    <div class="pb-3">
                        <label for="txtClave">Clave:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn-primary btn">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>