<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo Recorrido</title>
    <link rel="stylesheet" href="STYLE/style.css">
</head>
<body>
    <?php include("conecte.php"); ?>

    <div class="container">
        <h3>REGISTRAR RECORRIDO</h3>
        
        <form action="adicion2.php" method="POST">

            <label>Seleccionar Chofer:</label>
            <select name="idchofer" required>
                <option value="">-- Elige un Chofer --</option>
                <?php
                $sql = "SELECT * FROM chofer";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    echo "<option value='".$f['idchofer']."'>".$f['nombrecompleto']."</option>";
                }
                ?>
            </select>
            <div id="nombre_chofer" style="margin-bottom:10px;font-size:0.95em;color:#2563eb;"></div>

            <label>Seleccionar Vehículo:</label>
            <select name="idvehiculo" required>
                <option value="">-- Elige un Vehículo --</option>
                <?php
                $sql = "SELECT * FROM vehiculo";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    echo "<option value='".$f['idvehiculo']."'>".$f['placa']." - ".$f['modelo']."</option>";
                }
                ?>
            </select>
            <div id="nombre_vehiculo" style="margin-bottom:10px;font-size:0.95em;color:#2563eb;"></div>

            <label>Punto de Parada:</label>
            <select name="idparada" required>
                <option value="">-- Elige una Parada --</option>
                <?php
                $sql = "SELECT * FROM parada";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    echo "<option value='".$f['idparada']."'>".$f['puntoparada']."</option>";
                }
                ?>
            </select>
            <div id="nombre_parada" style="margin-bottom:10px;font-size:0.95em;color:#2563eb;"></div>

            <label>Fecha:</label>
            <input type="date" name="fecha" required>
            
            <label>Hora:</label>
            <input type="time" name="hora" required>
            
            <input type="submit" value="GUARDAR RECORRIDO" class="btn btn-green">
            
            <center><a href="index.php" class="btn btn-link">Cancelar y Volver</a></center>
        </form>
    </div>
    <script src="JAVASCRIPT/java.js"></script>
</body>
</html>