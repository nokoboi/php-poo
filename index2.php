<?php
declare(strict_types=1);
require 'modelos/autoload.php';
// require_once 'modelos/Perro.php';
// require_once 'modelos/Gato.php';
// require_once 'modelos/Cuadrado.php';
// require_once 'modelos/Circulo.php';
// require_once 'modelos/PlaSubscripcion.php';
// require_once 'modelos/CuentaBancaria.php';

// $miPerro = new Perro('Gon', 8, 'Beagle');
// var_dump($miPerro);
// echo "<br>";
// echo $miPerro->toString();
// echo "<br>";
// echo $miPerro->hacerRuido();
// echo "<br>";

// $gato = new Gato("Lolo", 5, true);
// echo $gato->toString();

// $cuadrado = new Cuadrado(5);
// echo "<br>";
// echo $cuadrado->mostrarArea();

// $circulo = new Circulo(5);
// echo '<br>';
// echo $circulo->mostrarArea();

// echo '<br>';
// $planSubscripcion = new PlaSubscripcion(PlaSubscripcion::PLAN_BASICO);
// echo $planSubscripcion->obtenerPrecio();
// echo '<br>';
// $planes = PlaSubscripcion::obtenertTodosLosPlanes();
// foreach ($planes as $plan => $precio) {
//     echo $plan . ' ' . $precio . '<br>';
// }

// $c1 = new CuentaBancaria(-35.3);
// echo $c1->ObtenerSaldo();
// $c1->Depositar(30);
// echo '<br>';
// echo "Tu saldo ahora es: ".$c1->ObtenerSaldo();
// $c1->Retirar(10);
// echo '<br>';
// echo "Tu saldo ahora es: ".$c1->ObtenerSaldo();


// // Importamos la clase ConvertidorMoneda
// require_once 'modelos/ConvertidorMoneda.php';

// // Realiza conversiones de 100 dólares a euros y de 100 euros a dólares
// echo "Conversión inicial:";
// echo "100 dólares a euros: " . ConvertidorMoneda::dolaresaEuros(100) . " euros";
// echo "<br>";
// echo "100 euros a dólares: " . ConvertidorMoneda::eurosaDolares(100) . " dólares";
// echo "<br>";

// // Actualiza las tasas de cambio
// ConvertidorMoneda::actualizarTasas(0.82, 1.22);

// // Realiza nuevamente las conversiones con las tasas actualizadas
// echo "\nConversión con tasas actualizadas:";
// echo "100 dólares a euros: " . ConvertidorMoneda::dolaresaEuros(100) . " euros";
// echo "<br>";
// echo "100 euros a dólares: " . ConvertidorMoneda::eurosaDolares(100) . " dólares";
// echo "<br>";

// // Muestra las tasas de cambio actuales
// $tasas = ConvertidorMoneda::obtenerTasasActuales();
// echo "\nTasas de cambio actuales:\n";
// echo "<br>";
// foreach ($tasas as $conversion => $tasa) {
//     echo "$conversion: $tasa\n";
// }

require_once 'modelos/trait.php';
$u1 = new Usuario("Manolico");
$u2 = new Usuario("Pepe");
$u3 = new Usuario("Juanjo");