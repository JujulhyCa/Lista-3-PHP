<?php

    require_once "cabecalho.php";

?>
    <h2>Calcular Fatorial</h2>
    <form action="exer5resp.php" method="post">
        <label for="numero" class="form-label">Número:</label>
        <input type="number" class="form-control" id="numero" name="numero" required>
        <br>
        <input type="submit" class="form-control" value="Calcular">
    </form>

<?php
    require_once "rodape.php";