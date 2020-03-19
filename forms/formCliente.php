
<?php
$currentPage="Clientes";
session_start();
include_once '../common/cabecalho.php';
?>

<div class="card" >
    <article class="card-body">
        <h4 class="card-title mb-4 mt-1">New Cliente</h4>
        <form action="<?php echo $path?>/inserts/insertCliente.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="nomeC">Nome Cliente</label>
                <input class="form-control" type="text" id="nomeC" name="nomeC">
            </div>
            <div class="form-group">
                <label for="contactoC">Contacto Cliente</label>
                <input class="form-control" type="text" id="contactoC" name="contactoC">
            </div>
            <div class="form-group">
                <label for="emailC">Email Cliente</label>
                <input class="form-control" type="text" id="emailC" name="emailC">
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