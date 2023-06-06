<?php
$aNotas = array(8,4,5,3,9,1);
$aSueldo = array(800.30, 400.87, 500.45, 300, 900.70, 100 ,900, 1800);

function maximo($aNumeros) {
    $maximo= 0;
    foreach($aNumeros as $numero){
        if($numero > $maximo){
            $maximo = $numero;
        }
    }
    return $maximo;

}


echo "La nota maxima es:" . maximo($aNotas) . "<br>";
echo "El sueldo maximo es:" . maximo($aSueldo) . "<br>";
?>

