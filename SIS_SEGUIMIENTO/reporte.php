<?php
    include("conecte.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Rutas</title>
    <link rel="stylesheet" href="STYLE/style.css">
</head>
<body>
    <div class="container" style="max-width: 900px;">
        <h1>REPORTE DE RUTAS</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>CHOFER</th>
                <th>VEHÍCULO</th>
                <th>PARADA</th>
                <th>FECHA</th>
                <th>HORA</th>
            </tr>
            <?php
            $sql = "SELECT r.idrecorrido, c.nombrecompleto, v.placa, v.modelo, p.puntoparada, r.fecha, r.hora 
                    FROM recorrido r 
                    INNER JOIN chofer c ON r.idchofer = c.idchofer 
                    INNER JOIN vehiculo v ON r.idvehiculo = v.idvehiculo 
                    INNER JOIN parada p ON r.idparada = p.idparada";
            
            $res = mysqli_query($conexion, $sql);    
            
            while($r = mysqli_fetch_array($res))
            {
            ?>
            <tr>
                <td><?php echo $r['idrecorrido'];?></td>
                <td><?php echo $r['nombrecompleto'];?></td>
                <td><?php echo $r['placa'] . " (" . $r['modelo'] . ")";?></td>
            <td><?php echo $r['puntoparada'];?></td>
                <td><?php echo $r['fecha'];?></td>
                <td><?php echo $r['hora'];?></td>
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