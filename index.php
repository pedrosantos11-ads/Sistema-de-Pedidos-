<?php
declare(strict_types=1);

require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'ItemPedido.php';
require_once 'Pedido.php';

$cliente = new Cliente("Pedro","phs1819@gmail.com");

$produto1 = new Produto("Play-Station 5",4500.00);
$produto2 = new Produto("Notebook",3000.00);

$pedido = new Pedido($cliente,22,'10/04/2026');

$item1 = new ItemPedido($produto1, 1);
$item2 = new ItemPedido($produto2, 1);

$pedido->adicionarItem($item1);
$pedido->adicionarItem($item2);


    echo "Pedido #" . $pedido->getNumero() . PHP_EOL;
    echo "Data: " . $pedido->getData() . PHP_EOL;
    echo "Cliente: " . $pedido->getCliente()->getNome() . PHP_EOL;

    foreach ($pedido->getItens() as $item) {
        echo "Produto: " . $item->getProduto()->getNome() . PHP_EOL;
        echo "Quantidade: " . $item->getQuantidade() . PHP_EOL;
        echo "-----" . PHP_EOL;
    }

    echo "TOTAL: R$ " . number_format($pedido->calcularTotal(), 2, ',', '') . PHP_EOL;


