<?php

namespace src;

use src\Vegetal;

require 'Vegetal.php';

class Arbol extends Vegetal{
    private int $altura;
    private string $espacio;
    private bool $esFrutal;
    private string $hoja;

    public function __construct($nomVulgar,$year,$price,$cuidados,$nivelRiego,$altura,$espacio,$esFrutal,$hoja){
        parent::__construct($nomVulgar,$year,$price,$cuidados,$nivelRiego);
        $this->altura = $altura;
        $this->espacio = $espacio;
        $this->esFrutal = $esFrutal;
        $this->hoja = $hoja;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setEspacio($espacio){
        $this->espacio = $espacio;
    }

    public function getEspacio(){
        return $this->espacio;
    }

    public function setFrutal($esFrutal){
        $this->esFrutal = $esFrutal;
    }

    public function getFrutal(){
       
         if ($this->esFrutal == 1){
            return "es frutal";
            
        } else {
            return "no es frutal";
        } 
    }

    public function setHoja($hoja){
        $this->hoja = $hoja;
    }

    public function getHoja(){
        return $this->hoja;
    }

    public function getInfo()
        {
            echo parent::getInfo();
            echo "altura: $this->altura<br> $this->esFrutal";
           
        }
}


?>