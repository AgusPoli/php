<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (file_exists("archivo.txt")){
    $jsonClientes = file_get_contents("archivo.txt");

    $aClientes = json_decode($jsonClientes , true);
    
}else{
    $aClientes = array();
}


if ($_POST){
    $documento = trim($_POST["txtDni"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);

    $aClientes[] = array("documento" => $documento,
                        "nombre" => $nombre,
                        "telefono" => $telefono,
                        "correo" => $correo);

    
    $jsonClientes = json_encode($aClientes);

    file_put_contents("archivo.txt", $jsonClientes);

}

if isset(_GET["pos"]){
    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>ABM Clientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Registro de Clientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-5">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="pb-3">
                        <label for="txtDni">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control" required>
                    </div>
                    <div class="pb-3">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                    </div>       
                    <div class="pb-3">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required>
                    </div>
                    <div class="pb-3">
                        <label for="txtCorreo">Correo:</label>
                        <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" required>
                    </div>
                    <div class="pb-3">
                        <label for="txtImagen">Archivo adjunto <input type="file" name="txtImagen" id="txtImagen" accept=".jpg, .jpeg, .png"></label>
                        <small>Archivos admitidos: .jpg, .jpeg, .png</small>

                    </div>
                    <div>
                        <button type= "submit" class="btn btn-primary" name="btnGuardar">Guardar</button>
                        <a href="index.php" class="btn btn-danger">NUEVO</a>
                        
                    </div>
                </form>

            </div>
            <div class="col-7 pt-2 px-5">
                <table class="table table-hover border shadow">
                    <thead>

                        <tr>
                            <th>Imagen:</th>
                            <th>DNI:</th>
                            <th>Nombre:</th>
                            <th>Correo:</th>
                            <th>Acciones:</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($aClientes as $cliente){ ?>
                        <tr>
                            <td></td>
                            <td><?php echo $cliente["documento"]; ?></td>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["correo"]; ?></td>
                            <td>
                                <a href=""><i class="bi bi-pencil"></i></a>
                                <a href="abmclientes/index.php?pos="><i class="bi bi-trash"></i></a>
                            </td>

                        </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </main>
    
</body>
</html>