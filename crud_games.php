<?php
require_once('conexion.php');

class CrudGames{

    public function __construct(){}

    public function insertar($game){
        print_r($game);
        $db=Db::conectar();
        $insert=$db->prepare('INSERT INTO juegos (nombre,plataforma,desarrollador) values(:nombre,:plataforma,:desarrollador)');
        $insert->bindValue('nombre',$game->getNombre());
        $insert->bindValue('plataforma',$game->getPlataforma());
        $insert->bindValue('contra',$game->getDesarrollador());
     

        $insert->execute();
    }


    public function mostrar(){
        $db=Db::conectar();
        $listaGames=[];
        $select=$db->query('SELECT id,nombre,plataforma,desarrollador FROM juegos');


        foreach($select->fetchAll() as $game){
            $myGame= new game();
            $myGame->setId($game['id']);
            $myGame->setNombre($game['nombre']);
            $myGame->setPlataforma($game['plataforma']);
            $myGame->setDesarrollador($game['desarrollador']);
            $listaGames[]=$myGame;
        }
        return $listaGames;
    }

    public function eliminar($id){
        $db=Db::conectar();
        $eliminar=$db->prepare('DELETE FROM juegos WHERE ID=:id');
        $eliminar->bindValue('id',$id);
        $eliminar->execute();
    }


    public function obtenergame($id){
        $db=Db::conectar();
        $select=$db->prepare('SELECT * FROM juegos WHERE ID=:id');
        $select->bindValue('id',$id);
        $select->execute();
        $game=$select->fetch(PDO::FETCH_ASSOC );
        $myGame= new game();
        $myGame->setId($game['id']);
        $myGame->setNombre($game['nombre']);
        $myGame->setPlataforma($game['plataforma']);
        $myGame->setDesarrollador($game['desarrollador']);
        return $myGame;
    }

    public function actualizar($game){
        try {
            if ($game->getId() == null) throw new \Exception('ID no válida');

            $db = Db::conectar();
            $actualizar = $db->prepare('UPDATE juegos SET nombre=:nombre, plataforma=:plataforma, desarrollador=:desarrollador WHERE id=:id');
            $actualizar->bindValue('id', $game->getId());
            $actualizar->bindValue('nombre', $game->getNombre());
            $actualizar->bindValue('plataforma', $game->getPlataforma());
            $actualizar->bindValue('desarrollador', $game->getDesarrollador());
            $actualizar->execute();
            return true;
        } catch (\Exception $e) {
            header('Location: update-user.php');
        }
        return false;
    }
}