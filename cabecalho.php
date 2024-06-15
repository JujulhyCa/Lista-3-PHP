<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Funções de inclusão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php

        require_once "nav.html"; // função de inclusão - existem 4 funções (include, require, * e *)
        require_once "funcoes.php"; // _once apresenta somente uma vez a função de inclusão
        exibirData();

    ?>
    <main class="container">
    <!-- o fechamento da MAIN está no rodape.php -->
