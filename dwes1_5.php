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
})

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>

<body>

    <ul>
        <h1>Filtrado</h1>

        <?php foreach ($nuevaLista as $libro) : ?>
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