<?php 

namespace src;

class Vegetal {
    private $nomComun;
    private $year;
    private $price;
    private $cuidados;
    private $nivelRiego;

    public function __construct($nomComun,$year,$price,$cuidados,$nivelRiego){
        $this->nomComun = $nomComun;
        $this->year = $year;
        $this->price = $price;
        $this->cuidados = $cuidados;
        $this->nivelRiego = $nivelRiego;
    }

    public function getInfo(){
        $info = "Nombre: $this->nomComun <br> price: $this->price <br> cuidados: $this->cuidados <br>";
        return $info;
    }

    public function setNomv($nomComun){
        $this->nomComun = $nomComun;
    }

    public function getNombv(){
        return $this->nomComun;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setCuidados($cuidados){
        $this->cuidados = $cuidados;
    }

    public function getCuidados(){
        return $this->cuidados;
    }

    public function setRiego($nivelRiego){
        $this->nivelRiego = $nivelRiego;
    }

    public function getRiego(){
        return $this->nivelRiego;
    }
}

?>