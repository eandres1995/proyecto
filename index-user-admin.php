<?php
error_reporting(E_ALL ^ E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
require_once('crud_users.php');
require_once('user.php');

$crud=new CrudUsuari();
$usuari= new user();
$listaUsuaris=$crud->mostrar();

?>

<html lang="es">
<head>
    <title>Administrar usuaris</title>
</head>
<body>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Administrar Usuaris</h1>
            <p>
                <a href="insert-user.php" class="btn btn-primary my-2">Insertar Usuari</a>
                <a href="index.php" class="btn btn-secondary my-2">Tornar</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($listaUsuaris as $usuari) {?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <p class="card-text">
                                    Nom: <?php echo $usuari->getNom() ?><br>
                                    Cognom: <?php echo $usuari->getCognom() ?><br>
                                    Usuari: <?php echo $usuari->getLogin() ?><br>
                                    Contrasenya: <?php echo $usuari->getContra() ?><br>
                                    Rol: <?php echo $usuari->getRol() ?><br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="update-user.php?id=<?php echo $usuari->getId()?>" class="btn btn-sm btn-outline-secondary">Actualizar</a>
                                        <a href="user-admin.php?id=<?php echo $usuari->getId()?>&accion=e" id="delete-usuari" class="btn btn-sm btn-outline-secondary">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</main>
</body>
</html>
