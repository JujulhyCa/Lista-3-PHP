<?php
    require_once "cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe peso e altura do formulário
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Chama a função para calcular o IMC
        $imc = calcularIMC($peso, $altura);

        // Chama a função para classificar o IMC
        $classificacao = classificarIMC($imc);

        // Exibe o IMC formatado com duas casas decimais
        echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";

        // Exibe a classificação do IMC
        echo "<p>Você está " . $classificacao . ".</p>";

        // Link para referência sobre IMC
        echo "<p>Para mais informações sobre o Índice de Massa Corporal, acesse:<br>";
        echo "<a href='https://www.bbc.com/portuguese/geral-46311722#:~:text=A%20f%C3%B3rmula%20do%20IMC%20divide,24%2C9%20t%C3%AAm%20peso%20normal.' target='_blank'>";
        echo "IMC: Qual é seu Índice de Massa Corporal e o que isso significa para sua saúde?</a></p>";
    } else {
        // Se não houver dados enviados via POST, exibe mensagem de erro
        echo "<p>Erro: Dados não recebidos corretamente.</p>";
    }    

    require_once "rodape.php";