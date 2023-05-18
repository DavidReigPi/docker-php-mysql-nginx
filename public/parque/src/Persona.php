<?php 

namespace src;

class Persona {

    private string $nombre;
    private string $apellidos;
    private string $poblacion;
    private int $edad;

    public function __construct($nombre, $apellidos, $poblacion, $edad){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->poblacion = $poblacion;
        $this->edad = $edad;
    }

    public function getInfo()
    {
        $info = "<b>Nombre: </b>$this->nombre <br><b>apellidos: </b>$this->apellidos<br>";
        return $info;
    }

    public function getNombre(){
        return $this->nombre . "<br>";
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApell($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getApell(){
        return $this->apellidos . "<br>";
    }

    public function setPob($poblacion){
        $this->poblacion = $poblacion;
    }

    public function getPob(){
        return $this->poblacion . "<br>";
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad . "<br>";
    }
}

    
?>


