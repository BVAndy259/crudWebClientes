<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Clientes</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHolder="Nombres">
            <input type="text" name="txtApe" placeHolder="Apellidos">
            <input type="text" name="txtDni" placeHolder="DNI">
            <input type="submit" value="guardar">
        </form>
    </div>
</body>
</html>
<?php
    require_once __DIR__ . '../../../logic/LCliente.php';
    if($_POST){
        $cli=new Cliente();
        $cli->setNombres($_POST['txtNom']);
        $cli->setApellidos($_POST['txtApe']);
        $cli->setDni($_POST['txtDni']);
        $log=new LCliente();
        $log->guardar($cli);
        header('Location: cargarClientes.php');
    }
?>