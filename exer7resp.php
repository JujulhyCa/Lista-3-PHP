<?php

    require_once "cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $metros = $_POST['metros'];
    
        $centimetros = converterMetrosParaCentimetros($metros);
        echo "$metros metros é igual a $centimetros centímetros.";
    } else {
        echo "Método de requisição inválido.";
    }

    require_once "rodape.php";
