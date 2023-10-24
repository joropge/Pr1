<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>

<body>

    <?php
    $libros2 = [

        [
            "Titulo" => "Harry Potter",
            "autor" => "JK Rowling",
            "url" => "https://www.wizardingworld.com/",
            "anio" => "1997"
        ],

        [
            "Titulo" => "The lord of the rings",
            "autor" => "Tolkien",
            "url" => "https://www.theonering.net/torwp/category/lotr/",
            "anio" => "1954"
        ],

        [
            "Titulo" => "Do androids dream of electrics sheeps",
            "autor" => "Pilip K. Dick",
            "url" => "https://es.wikipedia.org/wiki/%C2%BFSue%C3%B1an_los_androides_con_ovejas_el%C3%A9ctricas%3F",
            "anio" => "1968"
        ],

        [
            "Titulo" => "El imperio final",
            "autor" => "Brandon Sanderson",
            "url" => "https://cosmere.es/",
            "anio" => "2006"
        ],

        [
            "Titulo" => "El ojo del mundo",
            "autor" => "Robert Jordan",
            "url" => "https://cosmere.es/",
            "anio" => "1990"
        ],

    ];
    // var_dump($libros2);
    ?>
    <?php
    function filtrarAutor($libros2, $autor)
    {
        $librosFiltrados = [];

        foreach ($libros2 as $libro) {
            if ($libro['autor'] === $autor) {
                $librosFiltrados[] = $libro;
            }
        }
        return $librosFiltrados;
    }
    // $listaNueva = filtrarAutor($libros2);
    // var_dump($librosFiltrados);

    ?>
    <?php
    function filtrarAnio($libros2, $anio)
    {
        $librosFiltrados = [];

        foreach ($libros2 as $libro) {
            if ($libro['anio'] < $anio) {
                $librosFiltrados[] = $libro;
            }
        }
        return $librosFiltrados;
    }

    ?>

    <ul>
        <h1>Filtrado por Autores</h1>
        <?php foreach (filtrarAutor($libros2, 'Brandon Sanderson') as $libro) : ?>
            <li>
                <a href="<?php echo $libro['url']; ?>">
                    <?php echo "$libro[Titulo], por "; ?>
                    <?php echo "$libro[autor], en el año ($libro[anio])"; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <h1>Filtrado por año menor que 2000</h1>
        <?php foreach (filtrarAnio($libros2, '2000') as $libro) : ?>
            <li>
                <a href="<?php echo $libro['url']; ?>">
                    <?php echo "$libro[Titulo], por "; ?>
                    <?php echo "$libro[autor], en el año ($libro[anio])"; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


    <?php
    $filtro = function ($libros2, $autor) {
        $librosFiltrados = [];

        foreach ($libros2 as $libro) {
            if ($libro['autor'] === $autor) {
                $librosFiltrados[] = $libro;
            }
            return $librosFiltrados;
        }

    };
    ?>
    <ul>
        <h1>Filtrado</h1>
        <?php foreach ($filtro($libros2, 'Brandon Sanderson') as $libro) : ?>
            <li>
                <a href="<?php echo $libro['url']; ?>">
                    <?php echo "$libro[Titulo], por "; ?>
                    <?php echo "$libro[autor], en el año ($libro[anio])"; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php

    $filtro2 = function ($items, $key, $value) {
        $filteredItems = [];

        foreach($items as $item){
            if($item[$key]===$value){
                $filteredItems[]=$item;
            }
        }
        return $filteredItems;
        // var_dump($filteredItems);
        

    };

    $nuevaLista = $filtro2($libros2, 'autor', 'Brandon Sanderson');
    ?>
     <ul>
        <h1>Filtrado2</h1>
        <?php foreach ($filtro2($libros2, 'Brandon Sanderson') as $libro) : ?>
            <li>
                <a href="<?php echo $libro['url']; ?>">
                    <?php echo "$libro[Titulo], por "; ?>
                    <?php echo "$libro[autor], en el año ($libro[anio])"; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>