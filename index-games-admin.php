<?php
error_reporting(E_ALL ^ E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
require_once('crud_users.php');
require_once('user.php');

$crud=new CrudUsuari();
$game = new game();
$listaGames=$crud->mostrar();

?>

<html lang="es">
<head>
    <title>Administrar usuaris</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
            src="http://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script>
        $(document).on("click", "#delete-usuari", function (e) {
            let boton = $(this);
            e.preventDefault();
            e.stopImmediatePropagation();
            $.confirm({
                title: 'Segur?',
                buttons: {
                    confirm: function () {
                        console.log(boton);
                        window.location.href = boton.attr('href');
                    },
                    cancel: function () {
                        e.preventDefault();
                        e.stopImmediatePropagation();
                    },
                }
            });
        });
    </script>
</head>
<body>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Administrar Juegos</h1>
            <p>
                <a href="insert-user.php" class="btn btn-primary my-2">Insertar Juego</a>
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
                                    Nombre: <?php echo $game->getNombre() ?><br>
                                    Plataforma: <?php echo $game->getPlataforma() ?><br>
                                    Desarrollador: <?php echo $game->getDesarrollador() ?><br>
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
