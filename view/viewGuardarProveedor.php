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
        <form action="index.php?accion=guardarproveedor" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre">
            <input type="text" name="txtDes" placeHolder="RUC">
            <input type="text" name="txtDes" placeHolder="Telefono">
            <input type="text" name="txtDes" placeHolder="Direccion">
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>