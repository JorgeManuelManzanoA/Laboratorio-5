<?php
    $importe=$_POST["importe"];
    $hijos=$_POST["hijos"];
    
    $bonificacion= 50 * $hijos;
    $comision = $importe * 0.075;
    $sueldo_bruto= 600 + $bonificacion + $comision;
    $descuento=$sueldo_bruto * 0.11;
    $sueldo_neto=$sueldo_bruto - $descuento;

    echo "Comision: ".$comision."<br>";
    echo "Bonificacion: ".$bonificacion."<br>";
    echo "Sueldo bruto: ".$sueldo_bruto."<br>";
    echo "Descuento: ".$descuento."<br>";
    echo "Sueldo neto: ".$sueldo_neto."<br>";
?>


