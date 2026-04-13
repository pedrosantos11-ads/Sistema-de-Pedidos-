<?php
declare(strict_types=1);
final class Pedido {
    private Cliente $cliente;
    private int $numero;
    private string $data;

    private array $itens = [];

    public function __construct(Cliente $cliente, int $numero, string $data) {
        $this->cliente = $cliente;
        $this->numero = $numero;
        $this->data = $data;

    }
    public function getCliente(): Cliente {
        return $this->cliente;
    }
    public function getNumero() : int {
        return $this->numero;
    }
    public function getData() : string {
        return $this->data;
    }

    public function adicionarItem(ItemPedido $item): void {
    $this->itens[] = $item;
    }
    public function getItens(): array {
        return $this->itens;
    }

    public function calcularTotal() : float
    {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $total += $item->getProduto()->getPreco() * $item->getQuantidade();
        }
        return $total;
    }







}
