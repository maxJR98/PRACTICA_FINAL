<?php
    include("conecte.php");

    $id = $_POST['idagendacion'];
    $persona = $_POST['idpersona'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $actividad = $_POST['actividad'];
    $completado = $_POST['completado'];

    $sql = "UPDATE agendacion SET idpersona='$persona', fecha='$fecha', hora='$hora', actividad='$actividad', completado='$completado' WHERE idagendacion='$id'";
    
    $res = mysqli_query($conexion, $sql);

    // Redirigimos al reporte para ver el cambio
    header("Location: reporte.php");
?>