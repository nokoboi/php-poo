<?php
declare(strict_types=1);
class CuentaBancaria
{
    private float $saldo;

    public function __construct(float $saldo)
    {
        $this->saldo = $saldo >= 0 ? $saldo : 0;
    }

    public function Depositar(float $amount): bool
    {
        if ($amount > 0) {
            $this->saldo += $amount;
            return true;
        }

        return false;
    }

    public function retirar(float $amount): bool
    {
        if ($amount > 0 && $amount <= $this->saldo) {
            $this->saldo -= $amount;
            return true;
        }
        return false;
    }

    public function ObtenerSaldo(): string
    {
        return "Tu saldo actual es: " . $this->saldo;
    }
}