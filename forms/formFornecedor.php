
<?php
$currentPage="Fornecedores";
session_start();
include_once '../common/cabecalho.php';
?>
<body>
    <div class="card">
        <article class="card-body">    
            <h4 class="card-title mb-4 mt-1">New Fornecedor</h4>
            <form action="../inserts/insertFornecedor.php" method="POST" autocomplete="off">
                <div class="form-group">    
                    <label for="nomeF">Nome Fornecedor</label>
                    <input class="form-control" type="text" id="nomeF" name="nomeF">
                </div>
                <div class="form-group">
                    <label for="contactoF">Contacto Fornecedor</label>
                    <input class="form-control" type="text" id="contactoF" name="contactoF">
                </div>
                <div class="form-group">
                    <label for="emailF">Email Fornecedor</label>
                    <input class="form-control" type="text" id="emailF" name="emailF">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Submeter</button>
                </div>
            </form>
        </article>
    </div>
    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>