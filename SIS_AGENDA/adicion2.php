<?php
    include("conecte.php");

    $persona = $_POST['idpersona'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $actividad = $_POST['actividad'];
    $completado = $_POST['completado'];

    $sql = "INSERT INTO agendacion (idpersona, fecha, hora, actividad, completado) 
            VALUES ('$persona', '$fecha', '$hora', '$actividad', '$completado')";
    
    if(mysqli_query($conexion, $sql)){
        header("Location: reporte.php");
    } else {
        echo "Error al guardar: " . mysqli_error($conexion);
    }
?>