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
        <form action="index.php?accion=guardarcliente" method="post">
            <input type="text" name="txtNom" placeHolder="Nombre">
            <input type="text" name="txtDes" placeHolder="Apellidos">
            <input type="text" name="txtDes" placeHolder="DNI">
            <input type="text" name="txtDes" placeHolder="Celular">
            <input type="text" name="txtDes" placeHolder="Direccion">
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>