<?php

    require_once "cabecalho.php";

?>
    <h2>Calculadora de Soma</h2>
        <form action="exer3resp.php" method="post">
            <div class="row">
                <div class="col">
                    <label class="form-label">Informe 2 números</label><br>
                    <label for="valor1" class="form-label">Informe o primeiro número:</label>
                    <input type="number" class="form-control" name="valor1" id="valor1"><br>
                    <label for="valor2" class="form-label">Informe o segundo valor:</label>
                    <input type="number" class="form-control" name="valor2" id="valor2"><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-dark">Calcular</button>
                </div>
            </div>
        </form>
 
<?php
    require_once "rodape.php";
