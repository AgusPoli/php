<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 21;
    $precioSinIva = 0;
    $precioConIva = 0;
    $ivaCantidad = 0;

if ($_POST){
    $iva = $_POST["sltIva"];
    
    $precioSinIva = ($_POST["txtSinIva"]) > 0? $_POST["txtSinIva"] : 0;
    $precioConIva = ($_POST["txtConIva"]) > 0? $_POST["txtConIva"] : 0;
    
    

    if ($precioSinIva > 0){
        $precioConIva = $precioSinIva * ($iva/100+1);
    }

    if ($precioConIva > 0){
        $precioSinIva = $precioConIva / ($iva/100+1);
    }


    $ivaCantidad = $precioConIva - $precioSinIva;


}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Calculadora de IVA</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <label for="sltIva">IVA</label>
                        <select name="sltIva" id="sltIva" class="form-control">
                            <option value="10.5">10.5</option>
                            <option value="19">19</option>
                            <option value="21" selected>21</option>
                            <option value="27">27</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <label for="txtSinIva">Precio sin IVA</label>
                        <input type="number" name="txtSinIva" id="txtSinIva" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtConIva">Precion con IVA</label>
                        <input type="number" name="txtConIva" id="txtConIva" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>

            </div>
            <div class="col-6 pt-4">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva; ?>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td><?php echo number_format($precioSinIva,2,",","."); ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td><?php echo number_format($precioConIva,2,",","."); ?></td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td><?php echo number_format($ivaCantidad,2,",","."); ?></td>
                    </tr>
                </table>

            </div>
        </div>
    </main>
</body>
</html>