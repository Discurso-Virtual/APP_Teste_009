
<?php
$currentPage="Utilizador";
session_start();
include_once '../common/cabecalho.php';
?>
<body>
    <form action="../inserts/insertUtilizador.php" method="POST">
        <label for="Pnome">Primeiro Nome</label>
        <input type="text" id="Pnome" name="Pnome">

        <label for="Unome">Último Nome</label>
        <input type="text" id="Unome" name="Unome">
        
        <label for="emailU">Email</label>
        <input type="text" id="emailU" name="emailU">

        <label for="username">Username</label>
        <input type="text" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        
        <input type="submit" value="Criar">
    </form>

    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>