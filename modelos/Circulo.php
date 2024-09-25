<?php
declare(strict_types= 1);

require_once "Figura.php";

class Circulo extends Figura{
    private float $radio;

    public function __construct($radio){
        $this->radio = $radio;
    }

    public function mostrarArea(): string {
        $this->calcularArea();  
        return "El área del circulo es: " . $this->area;
    }

    public function calcularArea(): void {
        $this->area = 3.14 * ($this->radio * $this->radio);
    }
}