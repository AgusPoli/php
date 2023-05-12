<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aNotas= array(9, 8, 9.50, 4, 7, 8);

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

<?php
    function contar($aArray){
        $contador = 0;

        foreach($aArray as $item){
           $contador++; 
        }

        return $contador;
        

    }

    echo "La cantidad de notas es " . contar($aNotas) . "<br>";
    echo "La cantidad de productos es " . contar($aProductos) . "<br>";
    echo "La cantidad de clientes es " . contar($aPacientes);



?>

