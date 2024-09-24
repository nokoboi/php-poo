<?php
declare(strict_types= 1);
include 'modelos/Pelicula.php';
include 'modelos/Director.php';

// Directores
$fechaNacimiento = new DateTime('22-05-1994');
$fechaCreacion = new DateTimeImmutable();

$d1 = new Director(1,'Juan','Hernández', $fechaNacimiento, $fechaCreacion, 'Que pasa compa' );

$pelicula1 = new Pelicula(1, 'Papillon', 33, $d1);
//var_dump($pelicula1);
echo $pelicula1->toString();



// echo $pelicula1 -> getTitulo() . '<br>';
// echo $pelicula1 -> getDirector() .'<br>';

// $pelicula1 -> setDirector('Manolo');
// echo $pelicula1 -> toString();
// echo $pelicula1 ->titulo;
// echo '<br>';
// $p2 =  new Pelicula(2, 'Star Wars', -4, $d1);
// echo $p2 -> toString();
// $p2 -> setPrecio(3.35);
// echo $p2 -> toString();
// echo '<br>';


// echo $d1 -> toString();

//echo $d1 -> getCreado()->format('d-m-Y') .'<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    
</body>
</html>