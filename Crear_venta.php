<?php
                                                                                        -
     include "conexion.php";
    if(isset ($_POST["crear"])){
        
        $id_venta= $_POST["codigo"];
        $id_pan = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $venta = "INSERT INTO ventas (id_venta,id_pan, cantidad) VALUES ('$id_venta','$id_pan', '$cantidad')";

        if (mysqli_query($conn, $venta)) {
            echo "Venta registrada correctamente.";
          } else {
            echo "Error al registrar la venta: " . mysqli_error($conn);
          }
    
    }
       
 ?>

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
    <form action="crear.php" method="post">
    <label>Codigo: </label>
    <input type= "number" name="codigo" />
    <br>
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