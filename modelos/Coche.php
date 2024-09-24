<?php
declare(strict_types= 1);

class Coche{
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(string $modelo, string $marca, int $ano){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;        
    }

    public function getModelo(): string{
        return $this->modelo;
    }

    public function getMarca(): string{
        return $this->marca;
    }

    public function getAno():int{
        return $this->ano;
    }

    public function __toString():string{
        return "Coche: [$this->marca] [$this->modelo] del año [$this->ano]";
    }


}