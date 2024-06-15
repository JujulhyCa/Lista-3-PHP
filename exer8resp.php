<?php
    require_once "cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $area = $_POST['area'];
    
        list($latas_necessarias, $preco_total) = calcularTinta($area);
        echo "Para pintar uma área de $area metros quadrados, você precisará de $latas_necessarias latas de tinta.";
        echo "<br>O preço total será de R$ " . number_format($preco_total, 2, ',', '.');
    } else {
        echo "Método de requisição inválido.";
    }

    require_once "rodape.php";
