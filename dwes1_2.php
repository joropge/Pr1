<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>

<body>
    <h1>
        <?php
        echo "Hello World"
        ?>
    </h1>
    <p>
        <?php
        print "Pinta bien"
        ?>
    </p>
    <p>
        <?php
        #esro es un cmentario
        // una linea
        /*Para varias lineas */
        $saludo = "Bienvenido";
        $nombre = "Pepe";
        echo $saludo . ", " . $nombre //con el punto se concatena
        ?>
    </p>
    <p>
        <?php
        if (print "Hola") {
            echo ", caracola.";
        }
        ?>
    </p>
    <p>
        <?php
        $miEntero1 = 15; //decimal
        $miEntero2 = 015; //octal
        $miEntero3 = 0x15; //hexadecimal

        echo $miEntero1 . ", " . $miEntero2 . ", " . $miEntero3;

        ?>
    </p>
    <p>
        <?php
        $a = 5;
        echo "a = " . $a . "<br>";

        $b = $a + 1;
        echo "b = " . $b . "<br>";

        $c = $a++; //post iincremento la a se suma la siguiente vez que aparece
        echo "c = " . $c . "<br>";
        echo "a = " . $a . "<br>";

        $d = ++$a;
        echo "d = " . $d . "<br>";


        ?>
    </p>
    <p>
        <?php
        $a = "3.1416";
        echo "a vale $a y es de tipo " . gettype($a);

        $a = $b = "3.1416";
        echo "a vale $a y es de tipo " . gettype($a);
        settype($b, "float");
        echo "b vale $b y es de tipo " . gettype($b);
        ?>
    </p>
    <p>
        <?php
        $libros = ["Harry Potter", "The lord of the rings", "Do androids dream of electrics sheeps"];
        var_dump($libros);

        ?>
    </p>
    <p>
    <ul>
        <?php
        $books = $libros;
        foreach ($books as $book) {
            echo "<li>$book</li>";
        };

        ?>
    </ul>
    </p>
    <p>
        <?php
        $libros2 = [

            [
                "Titulo" => "Harry Potter",
                "autor" => "JK Rowling",
                "url" => "https://www.comprar.com",
                "año" => "1997"
            ],

            [
                "Titulo" => "The lord of the rings",
                "autor" => "Tolkien",
                "url" => "https://www.comp.com",
                "año" => "1954"
            ],

            [
                "Titulo" => "Do androids dream of electrics sheeps",
                "autor" => "Pilip K. Dick",
                "url" => "https://www.compi.com",
                "año" => "1968"
            ],

            [
                "Titulo" => "El imperio final",
                "autor" => "Brandon Sanderson",
                "url" => "https://cosmere.es/",
                "año" => "2006"
            ],

            [
                "Titulo" => "El ojo del mundo",
                "autor" => "Robert Jordan",
                "url" => "https://cosmere.es/",
                "año" => "1990"
            ],

        ];
        // var_dump($libros2);

        ?>
    </p>
    <p>
    <ul>
        <?php
        foreach ($libros2 as $book) {
            echo "<li>$book[Titulo]</li>";
        };
        ?>
    </ul>

    </p>
    <p>
    <ul>
        <?php foreach ($libros2 as $libro) : ?>
            <li>

                <?php echo "Título  $libro[Titulo]"; ?>
                <?php echo ",Autor  $libro[autor]"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <?php foreach ($libros2 as $libro) : ?>
            <li>

                <a href="<?php echo $libro['url']; ?>">
                    <?= $libro['Titulo']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

    </p>

    <ul>
        <?php foreach ($libros2 as $libro) : ?>
            <li>

                <?php echo "$libro[Titulo], "; ?>
                <?php echo "$libro[autor], $libro[año]"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <?php foreach ($libros2 as $libro) : ?>
            <?php if ($libro['autor'] == 'Brandon Sanderson') : ?>
                <li>
                    <a href="<?php echo $libro['url']; ?>">
                    <?php echo "$libro[Titulo], por "; ?>
                    <?php echo "$libro[autor], en el año $libro[año]"; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>


</body>

</html>