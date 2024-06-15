<?php

    require_once "cabecalho.php";

?>
    <h2>Ordenar Dois Valores</h2>
    <form action="exer6resp.php" method="post">
        <div class="row">
            <div class="col">
                <label for="valorA" class="form-label">Valor A:</label>
                <input type="number" class="form-control" id="valorA" name="valorA" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valorB" class="form-label">Valor B:</label>
                <input type="number" class="form-control" id="valorB" name="valorB" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Ordenar</button>
            </div>
        </div>
    </form>
<?php
    require_once "rodape.php";