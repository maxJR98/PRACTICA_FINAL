<?php
    include("conecte.php");
    
    $id = $_POST['idagendacion'];

    $sql = "DELETE FROM agendacion WHERE idagendacion='$id'";
    
    mysqli_query($conexion, $sql);
    
    header("Location: reporte.php");
?>