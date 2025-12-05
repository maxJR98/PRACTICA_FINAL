<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eliminar Actividad</title>
    <link rel="stylesheet" href="STYLE/style.css">
</head>
<body>
    <br><br>
    <div class="container" style="border: 2px solid #e74c3c;">
        <h2 style="color:#c0392b;">ELIMINAR ACTIVIDAD</h2>
        <p style="text-align:center;">Esta acción no se puede deshacer.</p>
        
        <form action="eliminacion2.php" method="POST">
            <label>Ingresa el ID de la Agendación:</label>
            <input type="number" name="idagendacion" required placeholder="ID a borrar...">
            
            <input type="submit" value="ELIMINAR DEFINITIVAMENTE" class="btn btn-red">
        </form>
        
        <center><a href="index.php" class="btn btn-link">Cancelar</a></center>
    </div>
</body>
</html>