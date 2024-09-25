<?php
declare(strict_types= 1);
require_once 'Animal.php';

class Gato extends Animal {
    private bool $isDomestico;
    public function __construct(string $nombre, int $edad,bool $isDomestico) {
        parent::__construct($nombre, $edad);
        $this->isDomestico = $isDomestico;
    }

    public function toString(): string {
        return parent::toString() . " Estado: ". ($this->isDomestico ? 'Domestico':'Salvaje');
    }

    public function hacerRuido(): string {
        return "Soy un gato y maullo";
    }
}