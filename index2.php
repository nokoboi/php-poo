<?php 
declare(strict_types= 1);
require_once 'modelos/Perro.php';
require_once 'modelos/Gato.php';
require_once 'modelos/Cuadrado.php';
require_once 'modelos/Circulo.php';
require_once 'modelos/PlaSubscripcion.php';

$miPerro =  new Perro('Gon', 8, 'Beagle');
var_dump($miPerro);
echo "<br>";
echo $miPerro->toString();
echo "<br>";
echo $miPerro->hacerRuido();
echo "<br>";

$gato = new Gato("Lolo",5, true);
echo $gato->toString();

$cuadrado = new Cuadrado(5);
echo "<br>";
echo $cuadrado->mostrarArea();

$circulo = new Circulo(5);
echo '<br>';
echo $circulo->mostrarArea();

echo '<br>';
$planSubscripcion = new PlaSubscripcion(PlaSubscripcion::PLAN_BASICO);
echo $planSubscripcion->obtenerPrecio();
echo '<br>';
$planes = PlaSubscripcion::obtenertTodosLosPlanes();
foreach ($planes as $plan => $precio) {
echo $plan .' '. $precio .'<br>';
}
