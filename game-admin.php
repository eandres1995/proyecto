<?php

require_once('crud_games.php');
require_once('game.php');


$crud = new CrudGames();
$game = new game();


if (isset($_POST["submit"])) {
    if (isset($_POST['insertar'])) {
        $game->setNombre($_POST['nombre']);
        $game->setPlataforma($_POST['plataforma']);
        $game->setDesarrollador($_POST['desarrollador']);
        $crud->insertar($game);
        header('Location: index-games-admin.php');
    } elseif (isset($_POST['actualizar'])) {

        require_once 'conexion.php';

        $db = Db::conectar();
        $select = $db->query('SELECT * FROM juegos');
        $game->setId($_POST['id']);
        $game->setNombre($_POST['nombre']);
        $game->setPlataforma($_POST['plataforma']);
        $game->setDesarrollador($_POST['desarrollador']);
          $crud->actualizar($game);
        header('Location: index-games-admin.php');
    }
} elseif (isset($_GET['accion'])) {
    if ($_GET['accion'] == 'e') {

        require_once 'conexion.php';

        $db = Db::conectar();
        $select = $db->query('SELECT * FROM juegos');
        foreach ($select->fetchAll() as $row_s) {
            $id = $row_s['id'];
        }
        $crud->eliminar($_GET['id']);
        header('Location: index-games-admin.php');
    }
} else {
    header('Location: index-games-admin.php');
}