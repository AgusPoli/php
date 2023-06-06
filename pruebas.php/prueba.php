<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Testeo</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Testeo form</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="prueba_res.php" method="post">
                    <div class="py-3">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="txtEdad">Edad:</label>
                        <input type="number" name="txtNumber" id="txtNumber" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>



    </main>
</body>
</html>