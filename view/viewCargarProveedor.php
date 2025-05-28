<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>LISTA PROVEEDORES</h1>
        <hr>
        <a href="index.php?accion=guardarproveedor">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>RUC</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($proveedor as $pro){
                ?>
                <tr>
                    <td><?=$pro->getIdProveedor()?></td>
                    <td><?=$pro->getNombre()?></td>
                    <td><?=$pro->getRUC()?></td>
                    <td><?=$pro->getTelefono()?></td>
                    <td><?=$pro->getDireccion()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>