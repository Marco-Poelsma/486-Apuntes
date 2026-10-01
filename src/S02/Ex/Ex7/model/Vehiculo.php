<?php

namespace Ex7;

class Vehiculo
{
    public string $matricula;
    public int $potencia;
    public int $velocidadMedia;

    public function __construct(string $matricula, int $potencia, int $velocidadMedia)
    {
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->velocidadMedia = $velocidadMedia;
    }

    public function calcularTiempo(int $distancia): float
    {
        return (float) ((float) $distancia / (float) $this->velocidadMedia);
    }
}
