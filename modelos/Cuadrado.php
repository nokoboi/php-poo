<?php
declare(strict_types=1);

require_once "Figura.php";

class Cuadrado extends Figura {
    private float $lado;

    public function __construct(float $lado) {
        $this->lado = $lado;
    }

    public function mostrarArea(): string {
        $this->calcularArea();  
        return "El área del cuadrado es: " . $this->area;
    }

    // Método que calcula el área del cuadrado.
    public function calcularArea(): void {
        $this->area = $this->lado * $this->lado;
    }
}
