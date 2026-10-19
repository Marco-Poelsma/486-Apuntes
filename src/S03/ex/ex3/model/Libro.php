<?php

namespace s03ex03;

class Libro
{
    public string $titulo;
    public string $autor;
    public int $ano_publi;
    public int $n_paginas;


    public function __construct(string $titulo, string $autor, int $ano_publi, int $n_paginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publi = $ano_publi;
        $this->n_paginas = $n_paginas;
    }

    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAnoPubli(int $ano_publi)
    {
        $this->ano_publi = $ano_publi;
    }

    public function getAnoPubli(): int
    {
        return $this->ano_publi;
    }

    public function setNPaginas(int $n_paginas)
    {
        $this->n_paginas = $n_paginas;
    }

    public function getNPaginas(): int
    {
        return $this->n_paginas;
    }
}
