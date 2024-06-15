<?php

    require_once "cabecalho.php";

?>
    <h2>Calculadora de IMC</h2>
    <form action="exer10resp.php" method="post">
        <div class="row">
            <div class="col">                
                <label for="peso" class="form-label">Peso (kg):</label>
                <input type="number" class="form-control" step="0.01" id="peso" name="peso" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="altura" class="form-label">Altura (m):</label>
                <input type="number" class="form-control" step="0.01" id="altura" name="altura" required>
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
