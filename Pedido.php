<?php
declare(strict_types=1);
class Pedido {
    private Cliente $cliente;
    private array $itens = [];

    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;

    }
    public function adicionarItem(ItemPedido $item): void {
    $this->itens[] = $item;
    }
    public function getItens(): array {
        return $this->itens;
    }
}
