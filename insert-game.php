<html lang="es">
<head>
    <title>Crear usuari</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form style="padding-left : 100px; max-width: 50%" id="register-form" action='user-admin.php' method='POST' enctype="multipart/form-data">
    <div class="form">
		<h1>Creació de nou usuari</h1>
        <h4>Introdueix les dades pel nou usuari</h4>
        <label>Nom:</label>
        <input style="max-width: 40%" id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" maxlength="20" required>
        <label>Plataforma:</label>
        <input style="max-width: 40%" id="plataforma" name="plataforma" type="text" class="form-control" placeholder="Plataforma" maxlength="20" required>
        <label>Desarrollador:</label>
        <input style="max-width: 40%" id="desarrollador" name="desarrollador" type="text" class="form-control" placeholder="Desarrollador" maxlength="20" required>
        <input type='hidden' name='insertar' value='insertar'>
    </div>
    <input type="submit" id="guardar" name="submit" onclick="return validar()" value='Guardar'>
    <a href="index-games-admin.php">Tornar</a>
</form>
</body>
</html>