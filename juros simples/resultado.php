<?php
    $capital = $_POST["capital"];
    $juros = $_POST["juros"];
    $tempo = $_POST["tempo"];

    $JUROS = $capital * ($juros/100) * $tempo;

    echo $JUROS;
?>