<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554K520",
    "stock" => 60,
    "precio" => 50000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553aIQ1201E",
    "stock" => 5,
    "precio" => 45000
);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class=>
                    Listado de productos
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border">
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Accion</th>

                    </tr>
                    <tr>
                        <td><?php echo $aProductos[0]["nombre"];?></td>
                        <td><?php echo $aProductos[0]["marca"];?></td>
                        <td><?php echo $aProductos[0]["modelo"];?></td>
                        <td><?php echo $aProductos[0]["stock"]>=10? "Hay stock": ($aProductos[0]["stock"]>0 && $aProductos[0]["stock"] <10? "Poco stock" : "No hay stock"); ?></td>
                        <td><?php echo $aProductos[0]["precio"];?></td>
                        <td><button class=" btn btn-primary">Comprar</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[1]["nombre"];?></td>
                        <td><?php echo $aProductos[1]["marca"];?></td>
                        <td><?php echo $aProductos[1]["modelo"];?></td>
                        <td><?php echo $aProductos[1]["stock"]>=10? "Hay stock": ($aProductos[1]["stock"]>0 && $aProductos[1]["stock"] <10? "Poco stock" : "No hay stock"); ?></td>
                        <td><?php echo $aProductos[1]["precio"];?></td>
                        <td><button class=" btn btn-primary">Comprar</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[2]["nombre"];?></td>
                        <td><?php echo $aProductos[2]["marca"];?></td>
                        <td><?php echo $aProductos[2]["modelo"];?></td>
                        <td><?php echo $aProductos[2]["stock"]>=10? "Hay stock": ($aProductos[2]["stock"]>0 && $aProductos[2]["stock"] <10? "Poco stock" : "No hay stock"); ?></td>
                        <td><?php echo $aProductos[2]["precio"];?></td>
                        <td><button class=" btn btn-primary">Comprar</button></td>
                    </tr>


                </table>

            </div>

        </div>


    </main>

</body>

</html>