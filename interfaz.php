<?php
declare(strict_types= 1);

/**
 * Se declara utilizando la palabra reservada interface
 * todos los metodos de una interfaz deben ser públicos
 * No pueden contener propiedades o variables de instancia
 * Las clases que implementan una interfaz deben proporcionar los metodos que se vayan a usar
 * 
 */

 interface Reproducible{
    public function Reproducir():void;
    public function Pausar():void;
    public function Detener():void;
 }

 class Cancion implements Reproducible{
    private string $titulo;

    public function __construct(string $titulo){
        $this->titulo = $titulo;
    }

    public function Reproducir():void{
        echo "Reproduciendo";
    }

    public function Pausar():void{
        echo "Pausando";
    }

    public function Detener():void{
        echo "Deteniendo";
    }
 }

 class Video implements Reproducible{
    private string $nombre;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }

    public function Reproducir():void{
        echo "Reproduciendo";
    }

    public function Pausar():void{
        echo "Pausando";
    }

    public function Detener():void{
        echo "Deteniendo";
    }
 }