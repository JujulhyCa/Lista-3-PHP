<?php
    require_once "cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anoNascimento = $_POST['anoNascimento'];
    
        // Calcula a idade
        $idade = calcularIdade($anoNascimento);
    
        // Calcula os dias vividos
        $diasVividos = calcularDiasVividos($idade);
    
        // Calcula a idade em 2025
        $idadeEm2025 = calcularIdadeEm2025($anoNascimento);
    
        // Exibe os resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>a) Idade atual: $idade anos.</p>";
        echo "<p>b) Dias vividos até hoje: $diasVividos dias.</p>";
        echo "<p>c) Idade em 2025: $idadeEm2025 anos.</p>";
    } else {
        echo "<h2>Erro: Dados não recebidos corretamente.</h2>";
    }

    require_once "rodape.php";