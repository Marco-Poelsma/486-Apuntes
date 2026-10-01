<?php

namespace Ex7;

class Maritimo extends Vehiculo
{
    public int $esloraTotal;
    public int $esloraFlotacion;
    public int $numHelices;

    public function __construct(string $matricula, int $potencia, int $velocidadMedia, int $esloraTotal, int $esloraFlotacion, int $numHelices)
    {
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->velocidadMedia = $velocidadMedia;
        $this->esloraTotal = $esloraTotal;
        $this->esloraFlotacion = $esloraFlotacion;
        $this->numHelices = $numHelices;
    }

    public function calcularPrecio(): int
    {
        return 2500 * $this->esloraTotal * $this->potencia;
    }
}
