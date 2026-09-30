<?php

namespace ex3;

class City
{
    public string $name;
    public string $country;
    public string $continent;

    public function __construct(string $name, string $country, string $continent)
    {
        $this->name = $name;
        $this->country = $country;
        $this->continent = $continent;
    }
}
