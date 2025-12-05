<?php
    include("conecte.php");

    $chofer = $_POST['idchofer'];
    $vehiculo = $_POST['idvehiculo'];
    $parada = $_POST['idparada'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $sql = "INSERT INTO recorrido (idchofer, idvehiculo, idparada, fecha, hora) 
            VALUES ('$chofer', '$vehiculo', '$parada', '$fecha', '$hora')";
    
    if(mysqli_query($conexion, $sql)){
        header("Location: reporte.php");
    } else {
        echo "Error al guardar: " . mysqli_error($conexion);
    }
?>