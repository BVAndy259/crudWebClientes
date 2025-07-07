<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Proveedores</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre">
            <input type="text" name="txtRuc" placeHolder="RUC">
            <input type="submit" value="guardar">
        </form>
    </div>
</body>
</html>
<?php
    require_once __DIR__ . '../../../logic/LProveedor.php';
    if($_POST){
        $pro=new Proveedor();
        $pro->setNombre($_POST['txtNom']);
        $pro->setRuc($_POST['txtRuc']);
        $log=new LProveedor();
        $log->guardar($pro);
        header('Location: cargarProveedor.php');
    }
?>