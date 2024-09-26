<?php
declare(strict_types= 1);

class ConvertidorMoneda{
    private static float $tasaDolarEuro = 0.85;
    private static float $tasaEuroDolar = 1.18;

    public static function DolaresAEuros(float $valor): float{
        return  $valor * self::$tasaDolarEuro;
    }

    public static function EurosADolares(float $valor):float{
        return $valor * self::$tasaEuroDolar;
    }

    public static function ActualizarTasas(float $euro, float $dolar){
        self::$tasaDolarEuro = $euro;
        self::$tasaEuroDolar = $dolar;
    }

    public static function obtenerTasasActuales(): array {
        return [
            'Dólar a Euro' => self::$tasaDolarEuro,
            'Euro a Dólar' => self::$tasaEuroDolar
        ];
    }
  }