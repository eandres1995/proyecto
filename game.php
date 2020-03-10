<?php


class game
{
    private $id;
    private $nombre;
    private $plataforma;
    private $desarrollador;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getPlataforma()
    {
        return $this->plataforma;
    }


    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;
    }


    public function getDesarrollador()
    {
        return $this->desarrollador;
    }


    public function setDesarrollador($desarrollador)
    {
        $this->desarrollador = $desarrollador;
    }


}