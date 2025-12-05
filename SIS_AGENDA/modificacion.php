<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modificar Agenda</title>
    <link rel="stylesheet" href="STYLE/style.css">
</head>
<body>
    <?php include("conecte.php"); ?>

    <div class="container">
        <h3>MODIFICAR ACTIVIDAD</h3>
        <p style="text-align:center; color:#777;">Ingresa el ID de la agendación y selecciona los nuevos datos.</p>

        <form action="modificacion2.php" method="POST">
            
            <label style="color:#e74c3c;">ID de la Agendación a Modificar:</label>
            <input type="number" name="idagendacion" placeholder="Ej: 1" required style="border: 2px solid #e74c3c;">
            <hr>

            <label>Nueva Persona Asignada:</label>
            <select name="idpersona" required>
                <option value="">-- Seleccione Persona --</option>
                <?php
                $sql = "SELECT * FROM persona";
                $res = mysqli_query($conexion, $sql);
                while($f = mysqli_fetch_array($res)){
                    echo "<option value='".$f['idpersona']."'>".$f['nombre']." ".$f['paterno']."</option>";
                }
                ?>
            </select>

            <label>Nueva Actividad:</label>
            <input type="text" name="actividad" required placeholder="Descripción de la actividad">

            <label>Nueva Fecha:</label>
            <input type="date" name="fecha" required>
            
            <label>Nueva Hora:</label>
            <input type="time" name="hora" required>

            <label>Estado (Completado):</label>
            <select name="completado" required>
                <option value="NO">NO</option>
                <option value="SI">SI</option>
            </select>
            
            <input type="submit" value="ACTUALIZAR DATOS" class="btn btn-blue">
            
            <center><a href="index.php" class="btn-link">Cancelar</a></center>
        </form>
    </div>
</body>
</html>