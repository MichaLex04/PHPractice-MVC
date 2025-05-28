<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>LISTA CLIENTES</h1>
        <hr>
        <a href="index.php?accion=gaurdarcliente">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($clientes as $cli){
                ?>
                <tr>
                    <td><?=$cli->getIdCliente()?></td>
                    <td><?=$cli->getNombre()?></td>
                    <td><?=$cli->getApellidos()?></td>
                    <td><?=$cli->getDNI()?></td>
                    <td><?=$cli->getCelular()?></td>
                    <td><?=$cli->getDireccion()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>