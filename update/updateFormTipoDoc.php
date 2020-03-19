
<?php
$currentPage="Fornecedores";
session_start();

include_once '../common/cabecalho.php';
    $id = $_GET['id'];

    include_once '../common/connectDB.php';

    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * from tiposdoc where codTiposDoc =". $id ;

?>
    <div class="card" >
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">Update Tipo Documento</h4>
            <form action="./updateTipoDoc.php" method="POST">
                <?php
                    foreach ($db->query($sql) as $row) {
                ?>
                <div class="form-group">
                    <label for="codTDoc">Código Tipo Documento</label>
                    <input class="form-control" type="text" id="codTDoc" name="codTDoc" value="<?php echo $row['codTiposDoc'] ?>">
                </div>
                <div class="form-group">
                    <label for="nomeTDoc">Nome Tipo Documento</label>
                    <input class="form-control" type="text" id="nomeTDoc" name="nomeTDoc" value="<?php echo $row['nomeTiposDoc'] ?>">
                </div>
                <div class="form-group">
                    <label for="tipoDoc">Tipo Documento</label>
                    <input class="form-control" type="text" id="tipoDoc" name="tipoDoc"  value="<?php echo $row['tipoDoc'] ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Alterar</button>
                </div>
            </form>
        </article>
    </div>
    <?php
    }
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>