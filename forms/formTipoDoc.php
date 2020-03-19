
<?php
$currentPage="Tipo documento";
session_start();
include_once '../common/cabecalho.php';
?>

<div class="card" >
    <article class="card-body">
        <h4 class="card-title mb-4 mt-1">New Tipo Documento</h4>
        <form action="<?php echo $path?>/inserts/insertTipoDoc.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="nomeTDoc">Nome Tipo Documento</label>
                <input class="form-control" type="text" id="nomeTDoc" name="nomeTDoc">
            </div>
            <div class="form-group">
                <label for="tipoDoc">Tipo Documento</label>
                <input class="form-control" type="text" id="tipoDoc" name="tipoDoc">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" name="submit">Criar</button>
            </div>
    </form>
    </article>
</div>
    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>