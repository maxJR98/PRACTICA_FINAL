<?php
    include("conecte.php");
    
    $id = $_POST['idrecorrido'];

    $sql = "DELETE FROM recorrido WHERE idrecorrido='$id'";
    
    mysqli_query($conexion, $sql);
    
    header("Location: reporte.php");
?>