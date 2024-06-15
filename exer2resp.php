<?php
    require_once "cabecalho.php";

    $valores = array();

    for ($i = 1; $i <= 7; $i++) {
        if (isset($_POST["valor$i"])) {
            $valores[$i] = $_POST["valor$i"];
        }
    }

    echo menorValor($valores);

    require_once "rodape.php";