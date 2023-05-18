<html>

<head></head>

<body>

<?php

use src\Persona;
use src\Animal;
use src\Arbol;
use src\Planta;

require 'src/Persona.php';
require 'src/Animal.php';
require 'src/Arbol.php';
require 'src/Planta.php';

/*include 'src/Persona.php';
include 'Animal.php';
include 'Arbol.php';
include 'Planta.php';*/


$persona1 = new Persona(
        "Rafael","Rodriguez Caro", "Jerez",45
    );

    echo $persona1 ->getInfo();

$persona2 = new Persona(
    "Maria","Jimenez Perea","Sevilla",28
);

 //echo $persona2 ->getInfo();
//echo $persona1 ->getNombre();
//echo $persona2 ->getPob();

$animal1 = new Animal("Gato","Nilo","Gris",4);

echo $animal1 ->getNom()."<br>"; 

$arbol1 = new Arbol("Nogal",2013,30,"pocos",6,3,"mucho",false,"");

$arbol2 = new Arbol("Manzano",2017,40,"pocos",5,3,"medio",true,"perenne");

echo $arbol2 -> getinfo(); 
echo "<br>";
echo $arbol1 ->getFrutal();
echo "<br>";

$planta1 = new Planta("Buganvilla", 2015,2,"rot",2,true,false,"quizas","asdt");
echo $planta1->getNombv();
echo "<br>".$planta1->getInterior();
?>

</body>

</html>