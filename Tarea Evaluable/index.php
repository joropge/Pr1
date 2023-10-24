<?php 
    $clientes = [

        [
            "nombre" => "Pedro",
            "pedidos" => [
                "articulos" => "tablet", "TV",
                "precioTotal" => 7.2

            ],
            "suscriptor" => true,
        ],
        [
            "nombre" => "Ana",
            "pedidos" => [
                "articulos" => ["smartphone", "cámara", "auriculares"],
                "precioTotal" => 850.5
            ],
            "suscriptor" => true
        ],
        [
            "nombre" => "Juan",
            "pedidos" => [
                "articulos" => ["monitor"],
                "precioTotal" => 299.99
            ],
            "suscriptor" => false
        ],
        [
            "nombre" => "María",
            "pedidos" => [],
            "suscriptor" => false
        ],
        [
            "nombre" => "Carlos",
            "pedidos" => [],
            "suscriptor" => true
        ],
    
    ];
    
    $suscritos = array_filter($clientes, function ($cliente) {
        return $cliente['suscriptor'];
    });
    $noSuscritos = array_filter($clientes, function ($cliente) {
        return $cliente['suscriptor'] === false;
    });
    $pedidos = array_filter($clientes, function ($cliente) {
        return count($cliente['pedidos']) > 0;
    });


    require "index.view.php"
     ?>