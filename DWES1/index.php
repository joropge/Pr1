<?php
$libros = [

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

$nuevaLista = array_filter($libros, function ($libro) {
    return $libro['autor'] === 'Brandon Sanderson';
});

$nuevaLista2 = array_filter($libros, function ($libro){
    return $libro['anio'] >= 1950 && $libro['anio'] <= 2000;
});

require "index.view.php"
 ?>