<?php
declare(strict_types= 1);

abstract class Figura{
    protected float $area;
    abstract public function calcularArea():void;

    public function mostrarAreaea():string{
        return "Area: $this->area";
    }
}
