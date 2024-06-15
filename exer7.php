<?php

    require_once "cabecalho.php";

?>
    <h2>Converter Metros em Centímetros</h2>
    <form action="exer7resp.php" method="post">
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Valor em Metros:</label>
                <input type="number" class="form-control" step="0.01" id="metros" name="metros" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Converter</button>
            </div>
        </div>
    </form>

<?php
    require_once "rodape.php";
