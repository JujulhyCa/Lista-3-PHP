<?php

    require_once "cabecalho.php";

?>
    <h2>Loja de Tintas: Cálculo de Latas e Preço</h2>
    <form action="exer8resp.php" method="post">
        <div class="row">
            <div class="col">
                <label for="area" class="form-label">Tamanho da área a ser pintada (em metros quadrados):</label>
                <input type="number" class="form-control" step="0.01" id="area" name="area" required>
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

