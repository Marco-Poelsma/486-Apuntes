<?php

namespace Ex7;

class Terrestre extends Vehiculo
{
    public int $numRuedas;
    public int $capacidadMaletero;
    public bool $railesCarretera;

    public function __construct(string $matricula, int $potencia, int $velocidadMedia, int $numRuedas, int $capacidadMaletero, bool $railesCarretera)
    {
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->velocidadMedia = $velocidadMedia;
        $this->numRuedas = $numRuedas;
        $this->capacidadMaletero = $capacidadMaletero;
        $this->railesCarretera = $railesCarretera;
    }
}
