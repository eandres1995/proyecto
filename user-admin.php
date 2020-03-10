<?php

require_once('crud_users.php');
require_once('user.php');


$crud = new CrudUsuari();
$usuari = new user();


if (isset($_POST["submit"])) {
    if (isset($_POST['actualizar'])) {

        require_once 'conexion.php';

        $db = Db::conectar();
        $select = $db->query('SELECT * FROM usuaris');
        $usuari->setId($_POST['id']);
        $usuari->setNom($_POST['nom']);
        $usuari->setCognom($_POST['cognom']);
        $usuari->setLogin($_POST['login']);
        $usuari->setContra($_POST['contra']);
        $usuari->setRol($_POST['rol']);
        $crud->actualizar($usuari);
        header('Location: index-user-admin.php');
    }
} elseif (isset($_GET['accion'])) {
    if ($_GET['accion'] == 'e') {

        require_once 'conexion.php';

        $db = Db::conectar();
        $select = $db->query('SELECT * FROM usuaris');
        foreach ($select->fetchAll() as $row_s) {
            $id = $row_s['id'];
        }
        $crud->eliminar($_GET['id']);
        header('Location: index-user-admin.php');
    }
} else {
    header('Location: index-user-admin.php');
}