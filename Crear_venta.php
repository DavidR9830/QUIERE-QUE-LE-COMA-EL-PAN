<?php
     include "conexion.php";
    if(isset ($_POST["crear"])){
        $nombrePan = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $dato = $conn->query("SELECT id_pan from tipopan where nombre = '$nombrePan';");
        if ($dato->num_rows > 0){
          print_r($dato);
        $id_pan = $dato->fetch_array();
        $venta = "INSERT INTO venta (id_pan, cantidad) VALUES ($id_pan[0], '$cantidad');";
        if ($conn->query($venta)) {
            echo "Venta registrada correctamente.";
          } else {
            echo "Error al registrar la venta: " . mysqli_error($conn);
          }
        } else {
          echo "Ese pan no existe";
        }
    } 
    header("Location: index.php");
?>