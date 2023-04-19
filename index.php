
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar venta</h1>
    <br>
    <form action="Crear_venta.php" method="post">
        <br>
        <label>Nombre:</label>
        <input type= "text" name="nombre" />
        <br>
        <br>
        <label>Cantidad:</label>
        <input type= "number" name="cantidad" />
        <br>
        <br>
        <br>
        <input type="submit" value= "Agregar venta" name="crear"/>
    </form>
</body>
</html>