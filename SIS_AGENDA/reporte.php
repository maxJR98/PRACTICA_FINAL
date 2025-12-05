<?php
    include("conecte.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Agenda</title>
    <link rel="stylesheet" href="STYLE/style.css">
</head>
<body>
    <div class="container" style="max-width: 900px;">
        <h1>REPORTE DE ACTIVIDADES</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>PERSONA</th>
                <th>ACTIVIDAD</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>ESTADO</th>
            </tr>
            <?php
            // Hacemos el JOIN entre agendacion y persona para traer el nombre en lugar del ID
            $sql = "SELECT a.idagendacion, p.nombre, p.paterno, p.materno, a.actividad, a.fecha, a.hora, a.completado
                    FROM agendacion a 
                    INNER JOIN persona p ON a.idpersona = p.idpersona
                    ORDER BY a.fecha DESC, a.hora DESC";
            
            $res = mysqli_query($conexion, $sql);    
            
            while($r = mysqli_fetch_array($res))
            {
            ?>
            <tr>
                <td><?php echo $r['idagendacion'];?></td>
                <td><?php echo $r['nombre'] . " " . $r['paterno'] . " " . $r['materno'];?></td>
                <td><?php echo $r['actividad'];?></td>
                <td><?php echo $r['fecha'];?></td>
                <td><?php echo $r['hora'];?></td>
                <td>
                    <?php 
                        // Un pequeño toque visual para el estado
                        if($r['completado'] == 'SI') {
                            echo "<span style='color:green; font-weight:bold;'>SI</span>";
                        } else {
                            echo "<span style='color:red; font-weight:bold;'>NO</span>";
                        }
                    ?>
                </td>
            </tr>
            <?php
            }   
            ?>
        </table>
        <br>
        <button onclick="window.print()" class="btn btn-blue">Imprimir Reporte</button>
        <a href="index.php" class="btn btn-red">Volver al Menú</a>
    </div>
</body>
</html>