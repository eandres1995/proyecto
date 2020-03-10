<html lang="es">
<head>
    <title>Crear juego</title>
</head>
<body>
<form style="padding-left : 100px; max-width: 50%" id="register-form" action='game-admin.php' method='POST' enctype="multipart/form-data">
    <div class="form">
        <h1>Creación de un nuevo juego</h1>
        <h4>Introduce los datos del nuevo juego</h4>
        <label>Nom:</label>
        <input style="max-width: 40%" id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" maxlength="20" required>
        <label>Plataforma:</label>
        <input style="max-width: 40%" id="plataforma" name="plataforma" type="text" class="form-control" placeholder="Plataforma" maxlength="20" required>
        <label>Desarrollador:</label>
        <input style="max-width: 40%" id="desarrollador" name="desarrollador" type="text" class="form-control" placeholder="Desarrollador" maxlength="20" required>
        <input type='hidden' name='insertar' value='insertar'>
    </div>
    <input type="submit" id="guardar" name="submit" value='Guardar'>
    <a href="index-games-admin.php">Tornar</a>
</form>
</body>
</html>