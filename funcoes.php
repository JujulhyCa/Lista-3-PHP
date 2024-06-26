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




