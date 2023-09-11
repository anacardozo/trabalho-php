<?php
    $primeiranota = $_POST["primeiranota"];
    $segundanota = $_POST["segundanota"];
    $terceiranota = $_POST["terceiranota"];
    $quartanota = $_POST["quartanota"];
    
    $resultado = ($primeiranota * $segundanota * $terceiranota * $quartanota)/4;

    echo " Sua nota é: $resultado";

    if($resultado >=0 && $resultado <=4)
    {
        echo " e sua menção é: I";
    }

    else if($resultado >=5 && $resultado <=6)
    {
        echo " e sua menção é: R";
    }

    else if($resultado >=7 && $resultado <=8)
    {
        echo " e sua menção é: B";
    }

    else if($resultado >=9 && $resultado <=10)
    {
        echo " e sua menção é: MB";
    }

    else
    {
        echo " Nota não conside com as do sistema";
    }

    

?>