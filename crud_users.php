<?php
require_once('conexion.php');

class CrudUsuari{

    public function __construct(){}

    public function insertar($usuari){
        print_r($usuari);
        $db=Db::conectar();
        $insert=$db->prepare('INSERT INTO usuaris (nom,cognom,login,contra,rol) values(:nom,:cognom,:login,:contra,:rol)');
        $insert->bindValue('nom',$usuari->getNom());
        $insert->bindValue('cognom',$usuari->getCognom());
        $insert->bindValue('login',$usuari->getLogin());
        $insert->bindValue('contra',$usuari->getContra());
        $insert->bindValue('rol',$usuari->getRol());

        $insert->execute();
    }


    public function mostrar(){
        $db=Db::conectar();
        $listaUsuaris=[];
        $select=$db->query('SELECT id,nom,cognom,login,contra,rol FROM usuaris');


        foreach($select->fetchAll() as $usuari){
            $myUsuari= new user();
            $myUsuari->setId($usuari['id']);
            $myUsuari->setNom($usuari['nom']);
            $myUsuari->setCognom($usuari['cognom']);
            $myUsuari->setLogin($usuari['login']);
            $myUsuari->setContra($usuari['contra']);
            $myUsuari->setRol($usuari['rol']);
            $listaUsuaris[]=$myUsuari;
        }
        return $listaUsuaris;
    }

    public function eliminar($id){
        $db=Db::conectar();
        $eliminar=$db->prepare('DELETE FROM usuaris WHERE ID=:id');
        $eliminar->bindValue('id',$id);
        $eliminar->execute();
    }


    public function obtenerusuari($id){
        $db=Db::conectar();
        $select=$db->prepare('SELECT * FROM usuaris WHERE ID=:id');
        $select->bindValue('id',$id);
        $select->execute();
        $usuari=$select->fetch(PDO::FETCH_ASSOC );
        $myUsuari= new user();
        $myUsuari->setId($usuari['id']);
        $myUsuari->setNom($usuari['nom']);
        $myUsuari->setCognom($usuari['cognom']);
        $myUsuari->setLogin($usuari['login']);
        $myUsuari->setContra($usuari['contra']);
        $myUsuari->setRol($usuari['rol']);
        return $myUsuari;
    }

    public function actualizar($usuari){
        try {
            if ($usuari->getId() == null) throw new \Exception('ID no válida');

            $db = Db::conectar();
            $actualizar = $db->prepare('UPDATE usuaris SET nom=:nom, cognom=:cognom, login=:login, contra=:contra, rol=:rol  WHERE id=:id');
            $actualizar->bindValue('id', $usuari->getId());
            $actualizar->bindValue('nom', $usuari->getNom());
            $actualizar->bindValue('cognom', $usuari->getCognom());
            $actualizar->bindValue('login', $usuari->getLogin());
            $actualizar->bindValue('contra', $usuari->getContra());
            $actualizar->bindValue('rol', $usuari->getRol());
            $actualizar->execute();
            return true;
        } catch (\Exception $e) {
            header('Location: update-user.php');
        }
        return false;
    }
}