<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Clientes suscritos</h1>

    <ol>
        <?php foreach ($suscritos as $cliente) : ?>
            <li>
                <?php echo "$cliente[nombre]"; ?>
            </li>
        <?php endforeach; ?>
    </ol>

    <h1>Clientes No suscritos</h1>
    <ol>
        <?php foreach ($noSuscritos as $cliente) : ?>
            <li>
                <?php echo "$cliente[nombre]"; ?>
            </li>
        <?php endforeach; ?>
    </ol>
    <h1>Clientes al menos 1 pedido</h1>
    <ol>
        <?php foreach ($pedidos as $cliente) : ?>
            <li>
                <?php echo $cliente["nombre"] . " " . $cliente["pedidos"]["precioTotal"] . "€"; ?>
            </li>
        <?php endforeach; ?>
    </ol>


</body>

</html>