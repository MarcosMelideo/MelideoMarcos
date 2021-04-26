<?php
    $n1 = $_POST["num_1"];
    $n2 = $_POST["num_2"];
    $mayor = 0;
    if  ($n1>$n2){
        $mayor = $n1;
    }
    else{
        $mayor = $n2;
    }
    echo "El mayor es: $mayor"
?>