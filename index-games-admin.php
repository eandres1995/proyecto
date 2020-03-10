<?php
error_reporting(E_ALL ^ E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
require_once('crud_games.php');
require_once('game.php');

$crud=new CrudGames();
$game = new game();
$listaGames=$crud->mostrar();

?>

<html lang="es">
<head>
    <title>Administrar juegos</title>
    <script>
        $(document).on("click", "#delete-game", function (e) {
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
                <a href="insert-game.php" class="btn btn-primary my-2">Insertar Juego</a>
                <a href="index.php" class="btn btn-secondary my-2">Tornar</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($listaGames as $game) {?>
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
                                        <a href="update-game.php?id=<?php echo $game->getId()?>" class="btn btn-sm btn-outline-secondary">Actualizar</a>
                                        <a href="game-admin.php?id=<?php echo $game->getId()?>&accion=e" id="delete-game" class="btn btn-sm btn-outline-secondary">Eliminar</a>
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
