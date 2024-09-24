<?php
declare(strict_types= 1);

class Persona{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNom(): string{
        return $this->nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getEdad(): int{
        return $this->edad;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function Saludar():string{
        return "Hola soy $this->nombre y tengo $this->edad años.";
    }
}