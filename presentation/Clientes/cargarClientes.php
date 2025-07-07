<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Clientes</h1>
        <hr>
        <a href="guardarClientes.php">Crear Nuevo</a>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>DNI</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once __DIR__ . '/../../logic/LCliente.php';
                    $log=new LCliente();
                    foreach($log->cargar() as $cliente){
                ?>
                <tr>
                    <td><?=$cliente->getIdCliente()?></td>
                    <td><?=$cliente->getNombres()?></td>
                    <td><?=$cliente->getApellidos()?></td>
                    <td><?=$cliente->getDni()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>