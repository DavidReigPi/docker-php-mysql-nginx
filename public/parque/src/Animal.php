<?php 

namespace src;

class Animal {
    private string $especie;
    private string $nombre;
    private string $color;
    private int $edad;

    public function __construct($especie, $nombre, $color, $edad){
        $this->especie = $especie;
        $this->nombre = $nombre;
        $this->color = $color;
        $this->edad = $edad;
    }

    public function setEspecie($especie){
        $this->especie = $especie;
    }

    public function getEspecie(){
        return $this->especie;
    }

    public function setNom($nombre){
        $this->nombre = $nombre;
    }

    public function getNom(){
        return $this->nombre;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this -> color;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this ->edad;
    }
}

?>