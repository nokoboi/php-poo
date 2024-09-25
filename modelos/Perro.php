<?php
declare(strict_types= 1);
require_once 'Animal.php';

class Perro extends Animal{
    private string $raza;

    public function __construct(string $nombre, int $edad, string $raza){
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }

    public function toString(): string{
        return parent::toString() . " , Raza: {$this->raza}";
    }

    public function hacerRuido(): string{
        return "Soy $this->nombre y ladro mucho porque estoy loco";
    }
}

