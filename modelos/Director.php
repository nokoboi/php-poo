<?php
declare(strict_types= 1);

class Director{
    private int $id;
    private string $nombre;
    private string $apellido;
    private DateTime $f_nacimiento;
    private DateTimeImmutable $creado;
    private string $biografia;

    public function __construct(int $id, string $nombre, string $apellido, DateTime $f_nacimiento, DateTimeImmutable $creado, string $biografia){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->f_nacimiento = $f_nacimiento;
        $this->creado = $creado;
        $this->biografia = $biografia;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getNom(): string{
        return $this->nombre;
    }

    public function getApellido(): string{
        return $this->apellido;
    }

    public function getFNacimiento(): DateTime{
        return $this->f_nacimiento;
    }

    public function getCreado(): DateTimeImmutable{
        return $this->creado;
    }

    public function getFNacimientoString(): string{
        return $this->f_nacimiento->format("d-m-Y");
    }

    public function getBiografia(): string{
        return $this->biografia;
    }

    public function setId(int $id): void{
        $this->id = $id;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellido): void{
        $this->apellido = $apellido;
    }

    public function setFNacimiento(DateTime $f_nacimiento): void{
        $this->f_nacimiento = $f_nacimiento;
    }

    public function setCreado(DateTimeImmutable $creado): void{
        $this->creado = $creado;
    }

    public function getNombreCompleto(): string{
        return "$this->nombre $this->apellido <br>";
    }

    public function toString():string{
        return 'Director: '. $this->getNombreCompleto() .
        'Fecha de nacimiento: '.$this->getFNacimientoString() . '<br>' .
        'Biografía: '.$this->biografia .'<br>';
    }

}