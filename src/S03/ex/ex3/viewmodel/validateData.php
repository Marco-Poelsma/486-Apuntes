<?php

namespace s03ex03;

require_once "../model/Libro.php";

$tituloErr = $autorErr = $anoErr = $nPaginasErr = "";
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$anoPubli = (int) $_POST["ano_publi"];
$nPaginas = (int) $_POST["n_paginas"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["titulo"]) || empty($_POST["autor"]) || empty($_POST["ano_publi"]) || empty($_POST["n_paginas"]) || $_POST["ano_publi"] > date("Y" || $_POST["n_paginas"] <= 0)) {
        if (empty($_POST["titulo"])) {
            $tituloErr = "Este campo es obligatorio.";
        }
        if (empty($_POST["autor"])) {
            $autorErr = "Este campo es obligatorio.";
        }
        if (empty($_POST["ano_publi"])) {
            $anoErr = "Este campo es obligatorio.";
        } elseif ((int) $_POST["ano_publi"] > date("Y")) {
            $anoErr = "El año introducido no puede ser mayor al año actual.";
        }
        if (empty($_POST["n_paginas"])) {
            $nPaginasErr = "Este campo es obligatorio.";
        } elseif ((int) $_POST["n_paginas"] <= 0) {
            $nPaginasErr = "El número de páginas debe ser un número positivo mayor que 0.";
        }
    } else {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $anoPubli = (int) $_POST["ano_publi"];
        $nPaginas = (int) $_POST["n_paginas"];
        $libro = new Libro($titulo, $autor, $anoPubli, $nPaginas);
        $libro->setTitulo($titulo);
        $libro->setAutor($autor);
        $libro->setAnoPubli($anoPubli);
        $libro->setNPaginas($nPaginas);
        $tituloErr = $autorErr = $anoErr = $nPaginasErr = "";
    }
}

$libro = new Libro($titulo, $autor, $anoPubli, $nPaginas);
