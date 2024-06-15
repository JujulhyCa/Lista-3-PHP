<?php
    require_once "cabecalho.php";

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    echo "<p>O resultado é ".calculaSoma($valor1, $valor2).".";

    require_once "rodape.php";