
<?php
$currentPage="Documentos Fiscais";
session_start();
include_once '../common/cabecalho.php';
include_once '../common/connectDB.php';


$database = new Connection();
$db = $database->openConnection();
$sql = "SELECT * FROM tiposdoc " ;


if(isset($_SESSION['codTipoDoc']) && isset($_SESSION['tipoDoc'])){

    $codTipo=$_SESSION['codTipoDoc'];
    $tipo=$_SESSION['tipoDoc'];


    unset($_SESSION['codTipoDoc']);
    unset($_SESSION['tipoDoc']);
}

?>


<main role="main" id="main" class="col-md-12 container">

            <div class="card col-md-12 formDocs" >
            <article class="card-body">
                <h4 class="card-title mb-4 mt-1">Novo Documento Fiscal</h4>
                <label for="fiscCriar"> Tipo de Documento Fiscal a criar </label>                   

                <div class="row container">
                    <select class="form-control col-md-4" id="fiscCriar" name="fiscCriar" >
                        <option value="" selected>Escolher Tipo Documento...</option>
                    <?php
                        foreach ($db->query($sql) as $row){?>
                            <option value="<?php echo $row['codTiposDoc']?>"><?php echo $row['nomeTiposDoc'] ?></option>
                    <?php 
                        }
                    ?>
                    </select>
                    <div class="col-md-1"></div>
                    <button class="btn btn-primary col-md-1" onclick="fetchInfo()" >Fetch </button>
                </div>
               
                <form action="<?php echo $path?>/inserts/insertDocFiscais.php" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="idDocFisc"> Id Documento </label>
                            <input class="form-control" type="text" id="idDocFisc" name="idDocFisc"  value="<?php
                                $sql="SELECT max(idCab)+1 as idCab FROM doccab "; 
                                foreach($db->query($sql) as $row){
                                    if($row['idCab']==null){
                                        echo 1;
                                    } else{
                                        echo $row['idCab'];

                                    }
                                }
                            ?>"disabled >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="codTipoDoc">Código Tipo Documento</label>
                            <input class="form-control" type="text" id="codTipoDoc" value="<?php if(isset($codTipo)){ echo $codTipo;} ?>" name="codTipoDoc">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tipoDoc">Tipo Documento</label>
                            <input class="form-control" type="text" id="tipoDoc" value="<?php if(isset($tipo)){ echo $tipo;} ?>"  name="tipoDoc">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="codCliente">Cod Cliente</label>
                            <input class="form-control" type="text" id="codCliente" name="codCliente">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nomeCli">Nome Cliente</label>
                            <input class="form-control" type="text" id="nomeCli" name="nomeCli">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tipoDoc">Número Documento deste tipo</label>
                            <input class="form-control" type="text" id="tipoDoc" name="tipoDoc" value="<?php 
                                if(isset($tipo)){
                                    $sql="SELECT max(docNo)+1 as numDoc FROM doccab where tipoDoc='$tipo'  "; 
                                    foreach($db->query($sql) as $row){
                                        if($row['numDoc']==null){
                                            echo 1;
                                        }else{
                                            echo $row['numDoc'];

                                        }
                                    }
                                }
                            ?>" disabled>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="form-group date col-md-4">
                            <label for="dataDoc">Data</label>
                            <input class="form-control" type="date" id="dataDoc" name="dataDoc" >
                        </div>
                    
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary btn-block col-md-3 " style="float:right" type="submit" name="submit">Criar</button>
                    </div>
                    </div>
                </form>
            </article>
        </div>
    <?php
     include_once '../common/rodape.php'; 
    ?>
</main>

</body>
</html>