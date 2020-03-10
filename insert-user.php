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
        <input style="max-width: 40%" id="nom" name="nom" type="text" class="form-control" placeholder="Nom" maxlength="20" required>
        <label>Cognom:</label>
        <input style="max-width: 40%" id="cognom" name="cognom" type="text" class="form-control" placeholder="Cognom" maxlength="20" required>
        <label>Usuari:</label>
        <input style="max-width: 40%" id="login" name="login" type="text" class="form-control" placeholder="Usuari" maxlength="20" required>
        <label>Contrasenya:</label>
        <input style="max-width: 40%" id="contra" name="contra" type="password" class="form-control" placeholder="Contrasenya" maxlength="20" required>
        <label for="rol">Rol:</label>
        <select  style="width : 200px" class="form-control" name="rol" id="rol">
            <option value=""> Tria un rol </option>
            <option value="usuari">Usuari</option>
            <option value="editor">Editor</option>
            <option value="admin">Administrador</option>
        </select>
        <input type='hidden' name='insertar' value='insertar'>
    </div>
    <input type="submit" id="guardar" name="submit" value='Guardar'>
    <a href="index-user-admin.php">Tornar</a>
</form>
</body>
</html>