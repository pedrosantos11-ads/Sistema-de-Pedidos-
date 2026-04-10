<?php
declare(strict_types=1);

require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'ItemPedido.php';
require_once 'Pedido.php';

$cliente = new Cliente("Pedro","coringao1907@gmail.com");

$produto1 = new Produto("Feijão",12.00);
$produto2 = new Produto("Farinha",5.70);

$pedido = new Pedido($cliente,1,'10/04/2021');

$item1 = new ItemPedido($produto1, 2);
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

    echo "TOTAL: R$ " . number_format($pedido->CalcularTotal(), 2, ',', '') . PHP_EOL;


