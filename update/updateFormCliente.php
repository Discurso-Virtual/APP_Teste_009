
<?php
$currentPage="Clientes";
session_start();
include_once '../common/cabecalho.php';


    $id = $_GET['id'];

    include_once '../common/connectDB.php';

    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * from cliente where codCliente =". $id ;

?>
    <form action="<?php echo $path ?>/update/updateCliente.php" method="POST" autocomplete="off">
        <?php
            foreach ($db->query($sql) as $row) {
        ?>  <div class="card" >
                <article class="card-body">
                <h4 class="card-title mb-4 mt-1">Update Cliente</h4>
                    <div class="form-group">
                        <label for="codC">Código Cliente</label>
                        <input class="form-control" type="text" id="codC" name="codC" value="<?php echo $row['codCliente'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nomeC">Nome Cliente</label>
                        <input class="form-control" type="text" id="nomeC" name="nomeC" value="<?php echo $row['nomeCliente'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="contactoC">Contacto Cliente</label>
                        <input class="form-control" type="text" id="contactoC" name="contactoC"  value="<?php echo $row['contacCliente'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="emailC">Email Cliente</label>
                        <input class="form-control" type="text" id="emailC" name="emailC"  value="<?php echo $row['emailCliente'] ?>">
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block" type="submit" name="submit">Alterar</button>
                    </div>
            </article>
        </div>
    </form>
    
        



    <?php
    }
     include_once '../common/rodape.php'; 
    ?>
    
</body>
</html>