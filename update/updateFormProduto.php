
<?php
    $currentPage="Produtos";
    session_start();

    include_once '../common/cabecalho.php';

        $id = $_GET['id'];

        include_once '../common/connectDB.php';
    
        $database = new Connection();
        $db = $database->openConnection();
        $sql = "SELECT * from produto where refProduto =". $id ;
    ?>
    <div class="card">
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">Update Produto</h4>
            <form action="./updateProduto.php" method="POST">
                <?php
                    foreach ($db->query($sql) as $row) {
                ?>
                <div class="form-group">
                    <label for="refProd">Referência</label>
                    <input class="form-control" type="text" id="refProd" name="refProd" value="<?php echo $row['refProduto'] ?>"> 
                </div>
                <div class="form-group">
                    <label for="descProd">Descrição Produto</label>
                    <input class="form-control" type="text" id="descProd" name="descProd"value="<?php echo $row['descProduto'] ?>">
                </div>
                <div class="form-group">
                    <label for="uniProd">Unidade Produto</label>
                    <input class="form-control" type="text" id="uniProd" name="uniProd" value="<?php echo $row['unidadeProduto'] ?>">
                </div>
                <div class="form-group">
                    <label for="famProd">Familia Produto</label>
                    <input class="form-control" type="text" id="famProd" name="famProd"value="<?php echo $row['familiaProduto'] ?>">
                </div>
                <div class="form-group">
                    <label for="preco1Prod">Preço1 Produto</label>
                    <input class="form-control" type="text" id="preco1Prod" name="preco1Prod" value="<?php echo $row['preco1Produto'] ?>">
                </div>
                <div class="form-group">
                    <label for="preco2Prod">Preço2 Produto</label>
                    <input class="form-control" type="text" id="preco2Prod" name="preco2Prod" value="<?php echo $row['preco2Produto'] ?>">
                </div>
                <div class="form-group">
                    <label for="preco3Prod">Preço3 Produto</label>
                    <input class="form-control" type="text" id="preco3Prod" name="preco3Prod" value="<?php echo $row['preco3Produto'] ?>">
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