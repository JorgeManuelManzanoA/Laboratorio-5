<?php
    $precio_actual=$_POST["precio_actual"];
    $cant=$_POST["cant"];
    
    $nuevo_precio=$precio_actual - ($precio_actual * 0.05);
    $importe=$cant * $nuevo_precio;
    $descuento=$importe * 0.07;
    $importe_pagar=$importe - $descuento;
    $caramelos=$cant * 2;

    echo "Precio nuevo: ".$nuevo_precio."<br>";
    echo "Valor del importe: ".$importe."<br>";
    echo "Descuento del importe: ".$descuento."<br>";
    echo "Importe a pagar: ".$importe_pagar."<br>";
    echo "Caramelos regalados: ".$caramelos."<br>";
?>

