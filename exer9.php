<?php

    require_once "cabecalho.php";

?>
    <h2>Calculadora de Idade e Tempo de Vida</h2>
    <form action="exer9resp.php" method="post">
        <div class="row">
            <div class="col">
                <label for="anoNascimento" class="form-label">Ano de Nascimento:</label>
                <input type="number" class="form-control" id="anoNascimento" name="anoNascimento" required>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </form>

<?php
    require_once "rodape.php";
