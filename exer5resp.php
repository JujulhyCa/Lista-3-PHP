<?php
require_once "cabecalho.php";

// verifica se o formulário foi enviado usando o método HTTP POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    $fatorial = calcularFatorial($numero);
    echo "O fatorial de $numero é $fatorial.";
} else {
    echo "Método de requisição inválido.";

}

require_once "rodape.php";
