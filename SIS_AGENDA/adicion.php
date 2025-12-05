<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nueva Actividad</title>
    <link rel="stylesheet" href="STYLE/style.css">
</head>
<body>
    <?php include("conecte.php"); ?>

    <div class="container">
        <h3>REGISTRAR ACTIVIDAD</h3>
        
        <form action="adicion2.php" method="POST">

            <label>Seleccionar Persona:</label>
            <select name="idpersona" required>
                <option value="">-- Elige una Persona --</option>
                <?php
                $sql = "SELECT * FROM persona";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    // Concatenamos nombre y apellidos para mostrar
                    echo "<option value='".$f['idpersona']."'>".$f['nombre']." ".$f['paterno']." ".$f['materno']."</option>";
                }
                ?>
            </select>
            <div id="nombre_persona" style="margin-bottom:10px;font-size:0.95em;color:#2563eb;"></div>

            <label>Actividad:</label>
            <input type="text" name="actividad" required placeholder="Ej: Reunión de trabajo">

            <label>Fecha:</label>
            <input type="date" name="fecha" required>
            
            <label>Hora:</label>
            <input type="time" name="hora" required>

            <label>Estado (Completado):</label>
            <select name="completado" required>
                <option value="NO">NO</option>
                <option value="SI">SI</option>
            </select>
            
            <input type="submit" value="GUARDAR ACTIVIDAD" class="btn btn-green">
            
            <center><a href="index.php" class="btn btn-link">Cancelar y Volver</a></center>
        </form>
    </div>
    <script src="JAVASCRIPT/java.js"></script>
</body>
</html>