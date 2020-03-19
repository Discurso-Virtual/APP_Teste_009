    <?php 
    session_start();
    include_once "./common/connectDB.php";

    $id = $_GET['id'];
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM tiposdoc WHERE codTiposDoc = '$id' LIMIT 1" ;
   

    foreach($db->query($sql) as $row){
        $_SESSION['codTipoDoc']=$row['codTiposDoc'];
        $_SESSION['tipoDoc']=$row['tipoDoc'];
        header('location:http://192.168.1.20/teste/forms/formDocFiscais.php');

    }
    
    
    
    
    ?>