<?php
    require_once "cabecalho.php"; // funcoes.php está dentro do cabecalho, por isso chamei a função somar()

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    echo "<p>O valor da soma é: ".somar($valor1, $valor2)."</p>";

    echo "<p>O valor da subtração é: ".subtrair($valor1, $valor2)."</p>";

    echo "<p>O valor da multiplicação é: ".multiplicar($valor1, $valor2)."</p>";

    echo "<p>O valor da divisão é: ".dividir($valor1, $valor2)."</p>";

    require_once "rodape.php";