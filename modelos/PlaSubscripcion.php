<?php

declare(strict_types=1);

class PlaSubscripcion
{
    // Definicion de constantes
    public const PLAN_BASICO = 'basico';
    public const PLAN_STANDAR = 'estandar';
    public const PLAN_PREMIUM = 'premium';

    private const PRECIO_BASICO = 9.99;
    private const PRECIO_STANDAR = 14.99;
    private const PRECIO_PREMIUM = 19.99;

    private string $planActual;

    public function __construct(string $planActual)
    {
        $array = [self::PLAN_BASICO, self::PLAN_STANDAR, self::PLAN_PREMIUM];
        if (in_array($planActual, $array)) {
            $this->planActual = $planActual;            
        }else{
            throw new InvalidArgumentException("El plan seleccionado no es válido.");
        }
    
        
    }

    public function obtenerPrecio(): float
    {
        switch ($this->planActual) {
            case self::PLAN_BASICO:
                return self::PRECIO_BASICO;
            case self::PLAN_STANDAR:
                return self::PRECIO_STANDAR;
            case self::PLAN_PREMIUM:
                return self::PRECIO_PREMIUM;
            default:
                throw new Exception('Plan no reconocido');
        }
    }

    public static function obtenertTodosLosPlanes(): array{
        return [
            self::PLAN_BASICO => self::PRECIO_BASICO,
            self::PLAN_STANDAR => self::PRECIO_STANDAR,
            self::PLAN_PREMIUM => self::PRECIO_PREMIUM           
        ];
    }


}