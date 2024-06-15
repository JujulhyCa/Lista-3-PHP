<?php

    require_once "cabecalho.php";

?>

<form action="exer2resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe 7 números diferentes</label><br>
            <?php 
                for ($i = 1; $i <= 7; $i++): ?>
                    <input type="number" class="form-control" name="valor<?php echo $i;?>" id="valor"><br>
                <?php endfor; 
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </div>
    </div>
</form>

<?php
    require_once "rodape.php";

/* <!-- 2. Escreva um programa que leia 7 números diferentes, imprima o menor valor e imprima a posição do
menor valor na sequência de entrada. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar o Menor Valor</title>
</head>
<body>
    <h2>Encontrar o Menor Valor</h2>
    <form action="" method="post">
        <label>Informe 7 números diferentes:</label><br>
        <?php for ($i = 1; $i <= 7; $i++): ?>
            <input type="number" name="valor<?php echo $i; ?>"><br>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = array();

        for ($i = 1; $i <= 7; $i++) {
            if (isset($_POST["valor$i"])) {
                $valores[] = $_POST["valor$i"];
            }
        }

        if (!empty($valores)) {
            $menor = min($valores);
            $posicao = array_search($menor, $valores) + 1;
            echo "O menor valor é $menor, na posição $posicao.";
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
    ?>
</body>
</html>*/