<?php
    require_once "cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
    
        $resultado = ordenarValores($valorA, $valorB);
        echo $resultado;
    } else {
        echo "Método de requisição inválido.";
    }

    require_once "rodape.php";
