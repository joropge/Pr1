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

    <ul>
        <h1>Filtrado por año mayor que 1950 y menor que 2000</h1>

        <?php foreach ($nuevaLista2 as $libro) : ?>
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