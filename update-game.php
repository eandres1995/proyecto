<?php
#Arreglar actualizar para poder dejar la imagen vacia, para poder actualizar sin tener que poner la imagen.
require_once('crud_games.php');
require_once('game.php');
$crud=new CrudGames();
$game= new game();
$game=$crud->obtenergame($_GET['id']);

?>
<html lang="es">
<head>
    <title>Actualitzar usuari</title>
</head>
<body>
<form style="padding-left : 100px" id="register-form" enctype=multipart/form-data action='game-admin.php' method='post'>
    <div class="form">
        <h1>Actualiza los datos del juego</h1>
        <input type='hidden' name='id' value='<?php echo $game->getId()?>'>
        <h1>Introduce los datos del juego</h1>
        <label>Nombre:</label>
        <input style="max-width: 40%" id="nombre" name="nombre" value='<?php echo $game->getNombre()?>' type="text" class="form-control" placeholder="Nombre" maxlength="20" required>
        <label>Plataforma:</label>
        <input style="max-width: 40%" id="plataforma" name="plataforma" value='<?php echo $game->getPlataforma()?>' type="text" class="form-control" placeholder="Plataforma" maxlength="20" required>
        <label>Desarrollador:</label>
        <input style="max-width: 40%" id="desarrollador" name="desarrollador" value='<?php echo $game->getDesarrollador()?>' type="text" class="form-control" placeholder="Desarrollador" maxlength="20" required>
        <input type='hidden' name='actualizar' value='actualizar'>
        <input type='submit' name="submit" onclick="return validar()" value='Actualizar'>
        <a href="index-games-admin.php">Tornar</a>
    </div>
</form>
</body>
</html>