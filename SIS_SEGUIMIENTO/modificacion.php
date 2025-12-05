<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modificar Ruta</title>
    <link rel="stylesheet" href="STYLE/style.css">
</head>
<body>
    <?php include("conecte.php"); ?>

    <div class="container">
        <h3>MODIFICAR RECORRIDO</h3>
        <p style="text-align:center; color:#777;">Ingresa el ID del recorrido y selecciona los nuevos datos.</p>

        <form action="modificacion2.php" method="POST">
            
            <label style="color:#e74c3c;">ID del Recorrido a Modificar:</label>
            <input type="number" name="idrecorrido" placeholder="Ej: 1" required style="border: 2px solid #e74c3c;">
            <hr>

            <label>Nuevo Chofer:</label>
            <select name="idchofer" required>
                <option value="">-- Seleccione Nuevo Chofer --</option>
                <?php
                $sql = "SELECT * FROM chofer";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    echo "<option value='".$f['idchofer']."'>".$f['nombrecompleto']."</option>";
                }
                ?>
            </select>

            <label>Nuevo Vehículo:</label>
            <select name="idvehiculo" required>
                <option value="">-- Seleccione Nuevo Vehículo --</option>
                <?php
                $sql = "SELECT * FROM vehiculo";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    echo "<option value='".$f['idvehiculo']."'>".$f['placa']." - ".$f['modelo']."</option>";
                }
                ?>
            </select>

            <label>Nueva Parada:</label>
            <select name="idparada" required>
                <option value="">-- Seleccione Nueva Parada --</option>
                <?php
                $sql = "SELECT * FROM parada";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    echo "<option value='".$f['idparada']."'>".$f['puntoparada']."</option>";
                }
                ?>
            </select>

            <label>Nueva Fecha:</label>
            <input type="date" name="fecha" required>
            
            <label>Nueva Hora:</label>
            <input type="time" name="hora" required>
            
            <input type="submit" value="ACTUALIZAR DATOS" class="btn btn-blue">
            
            <center><a href="index.php" class="btn-link">Cancelar</a></center>
        </form>
    </div>
</body>
</html>