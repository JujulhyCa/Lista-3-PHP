<?php

    function exibirData(){
        echo "Hoje é dia ".date("d");
    }

    function somar($n1, $n2){
        return $n1+$n2;
    }

    function subtrair($n1, $n2){
        return $n1-$n2;
    }

    function multiplicar($n1, $n2){
        return $n1*$n2;
    }

    function dividir($n1, $n2){
        return $n1/$n2;
    }

    // exercício 1
    function positivoNegativo($v){ 
        if($v > 0){
            return "Valor positivo!";
        } else if ($v < 0){
            return "Valor negativo!";
        } else{
            return "Igual a zero!";
        }
    }

    // exercício 2
    function menorValor($valores){ 

        if (!empty($valores)) {
            $m = min($valores);
            $posicao = array_search($m, $valores);
            return "O menor valor é $m, na posição $posicao.";
        } else {
            return "Por favor, preencha todos os campos.";
        }
    }

    // exercício 3
    function calculaSoma($valor1, $valor2){

            // Calcular a soma dos valores de entrada
            $soma = $valor1 + $valor2;

            // Verifique se os valores são iguais
            if ($valor1 == $valor2) {
                // Se forem iguais, retorne o triplo da soma
                $resultado = $soma * 3;
            } else {
                // Se não forem iguais, retorne apenas a soma
                $resultado = $soma;
            }

            // Exibir o resultado
            return $resultado;
        }

    // exercício 4 - Tabuada
    function tabuada($valor){

        for($i=0;$i<=10;$i++){
            
            echo "<p>$valor * $i = ".($valor*$i)."</p>";
        }

    }

    // exercício 5 - Fatorial
    function calcularFatorial($numero) {
        if ($numero < 0) {
            return "Número inválido";
        }
        $fatorial = 1;
        for ($i = $numero; $i > 1; $i--) {
            $fatorial *= $i;
        }
        return $fatorial;
    }

    // exercício 6 
    function ordenarValores($valorA, $valorB) {
        if ($valorA == $valorB) {
            return "Números iguais: $valorA";
        } elseif ($valorA < $valorB) {
            return "$valorA $valorB";
        } else {
            return "$valorB $valorA";
        }
    }
 
    // exercício 7 - Converter metro em centímetro
    function converterMetrosParaCentimetros($metros) {
        return $metros * 100;

    // exercício 8 - Loja de Tintas: Cálculo de Latas e Preço
    function calcularTinta($area) {
        $litros_por_metro = 1 / 3; // 1 litro cobre 3 metros quadrados
        $litros_necessarios = $area * $litros_por_metro;
        $litros_por_lata = 18;
        $preco_por_lata = 80.00;

        $latas_necessarias = ceil($litros_necessarios / $litros_por_lata); // Arredondar para cima
        $preco_total = $latas_necessarias * $preco_por_lata;

        return array($latas_necessarias, $preco_total);
    }

    // exercicio 9 - Calculadora de Idade e Tempo de Vida
    function calcularIdade($anoNascimento) {
        $anoAtual = date("Y");
        return $anoAtual - $anoNascimento;
    }

    function calcularDiasVividos($idade) {
        return $idade * 365; // considerando anos bissextos, a aproximação é simplificada
    }

    function calcularIdadeEm2025($anoNascimento) {
        return 2025 - $anoNascimento;
    }

    // exercício 10 - Calculadora de IMC
  
    function calcularIMC($peso, $altura) {
        // Calcula o IMC
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    function classificarIMC($imc) {
        // Classifica o IMC
        if ($imc < 18.5) {
            return "abaixo do peso";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            return "com peso normal";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            return "acima do peso";
        } else {
            return "com obesidade";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do IMC</h2>

    <?php
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
    ?>
</body>
</html>





