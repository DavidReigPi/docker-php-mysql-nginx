<?php 

namespace src;

use src\Vegetal;

//require 'Vegetal.php';

class Planta extends Vegetal {
    private bool $esInterior;
    private bool $esFloral;
    private string $tipoTierra;
    private string $comentarios;

    public function __construct($nomComun,$year,$price,$cuidados,$nivelRiego,$esInterior,$esFloral,$tipoTierra,$comentarios){
        parent::__construct($nomComun,$year,$price,$cuidados,$nivelRiego);
        $this->esInterior = $esInterior;
        $this->esFloral = $esFloral;
        $this->tipoTierra = $tipoTierra;
        $this->comentarios = $comentarios;
    }

    public function setInterior($esInterior){
        $this->esInterior = $esInterior;
    }

    public function getInterior(){
        if ($this->esInterior == 1){
            return "planta de interior";
            
        } else {
            return "planta de exterior";
        } 
    }

    public function setFloral($esFloral){
        $this->esFloral = $esFloral;
    }

    public function getFloral(){
        if ($this->esFloral == 1){
            return "es floral";  
        } else {
            return "no es floral";
        } 
    }

    public function setTierra($tipoTierra){
        $this->tipoTierra = $tipoTierra;
    }

    public function getTierra(){
        return $this->tipoTierra;
    }

    public function setComent($comentarios){
        $this->comentarios = $comentarios;
    }

    public function getComent(){
        return $this->comentarios;
    }

    
}
?>