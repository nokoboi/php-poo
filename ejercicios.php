<?php
/**
* Crea una clase llamada persona
* Debe tener los siguientes atributos:  nombre y edad
* Debe tener un metodo public llamado saludar que devuelta un string
* con el formato "hola mi nombre es: [nombre] y tengo [edad] años
*/

/**
 * Crea una clase llamada coche que debe tener tres propiedades privadas, marca, modelo y año
 * debe tener un constructor
 * metodo publico obtenerinformacion que devuelta un string con el siguiente formato
 * formato coche marca model del año
 */

include("modelos/Persona.php");
include("modelos/Coche.php");

$p1= new Persona("Paco", 23);
echo $p1->Saludar();

echo '<br>';

$c1 = new Coche("Clase B","Mercedes", 2017);
echo $c1->__toString();