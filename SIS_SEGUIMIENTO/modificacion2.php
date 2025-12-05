<?php
    include("conecte.php");

    $id = $_POST['idrecorrido'];
    $chofer = $_POST['idchofer'];
    $vehiculo = $_POST['idvehiculo'];
    $parada = $_POST['idparada'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $sql = "UPDATE recorrido SET idchofer='$chofer', idvehiculo='$vehiculo', idparada='$parada', fecha='$fecha', hora='$hora' WHERE idrecorrido='$id'";
    
    $res = mysqli_query($conexion, $sql);

    // Redirigimos al reporte para ver el cambio
    header("Location: reporte.php");
?>