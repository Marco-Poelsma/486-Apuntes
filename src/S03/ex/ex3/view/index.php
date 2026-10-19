<?php

    namespace s03ex03;

    require_once "../model/Libro.php";
    require_once "../viewmodel/validateData.php";

    global $tituloErr;
    global $autorErr;
    global $anoErr;
    global $nPaginasErr;
    global $libro;
    global $titulo;
    global $autor;
    global $anoPubli;
    global $nPaginas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <p>Título: <input type="text" value="<?php echo $titulo; ?>" name="titulo" /> <?php echo $tituloErr; ?></p>
        <p>Autor: <input type="text" value="<?php echo $autor; ?>" name="autor" /> <?php echo $autorErr; ?></p>
        <p>Año de publicación: <input type="number" value="<?php echo $anoPubli; ?>" name="ano_publi" /> <?php echo $anoErr; ?></p>
        <p>Número de páginas: <input type="number" value="<?php echo $nPaginas; ?>" name="n_paginas" /> <?php echo $nPaginasErr; ?></p>
        <input type="submit" />
    </form>

    <p>
        <?php var_dump($libro); ?>
    </p>

    <h2>Datos del libro</h2>
    <table>
        <tbody>
            <tr>
                <th>Título</th>
                <td><?php echo $libro->getTitulo(); ?></td>
            </tr>
            <tr>
                <th>Autor</th>
                <td><?php echo $libro->getAutor(); ?></td>
            </tr>
            <tr>
                <th>Año de publicación</th>
                <td><?php echo $libro->getAnoPubli(); ?></td>
            </tr>
            <tr>
                <th>Número de páginas</th>
                <td><?php echo $libro->getNPaginas(); ?></td>
            </tr>
        </tbody>
    </table>


    <p><a href="../../../../index.html">Volver a inicio</a></p>
</body>
</html>
