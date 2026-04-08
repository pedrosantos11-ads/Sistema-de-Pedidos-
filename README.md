# Sistema de Pedidos

## Descrição do Projeto
O Sistema de Pedidos é uma aplicação desenvolvida em PHP que visa gerenciar pedidos de produtos de forma eficiente e organizada. A aplicação permite a criação de clientes, produtos e pedidos, facilitando a administração de um sistema de vendas.

## Estrutura das Classes
O sistema é composto por quatro classes principais:

1. **Classe Cliente**  
   - Representa um cliente do sistema.  
   - Propriedades: `id`, `nome`, `email`, `telefone`.  
   - Métodos: `cadastrar()`, `atualizar()`.  

2. **Classe Produto**  
   - Representa um produto disponível para venda.  
   - Propriedades: `id`, `nome`, `preco`, `quantidade`.  
   - Métodos: `adicionar()`, `remover()`.  

3. **Classe ItemPedido**  
   - Representa um item dentro de um pedido.  
   - Propriedades: `produto`, `quantidade`, `subtotal`.  
   - Métodos: `calcularSubtotal()`.  

4. **Classe Pedido**  
   - Representa um pedido realizado por um cliente.  
   - Propriedades: `cliente`, `itens`, `total`.  
   - Métodos: `adicionarItem()`, `finalizar()`.  

## Implementações Realizadas
- Cadastro de clientes e produtos.  
- Criação de pedidos com múltiplos itens.  
- Cálculo automático do total de um pedido.  

## Relações entre Classes
- A classe `Cliente` se relaciona com a classe `Pedido`, onde um cliente pode ter múltiplos pedidos.  
- A classe `Pedido` contém múltiplos `ItemPedido`, cada um deles associado a um único `Produto`.  

## Exemplo de Uso
```php
// Criando um novo cliente  
$cliente = new Cliente();  
$cliente->nome = "João da Silva";  
$cliente->email = "joao@example.com";  
$cliente->cadastrar();  

// Criando um novo produto  
$produto = new Produto();  
$produto->nome = "Camiseta";  
$produto->preco = 29.90;  
$produto->adicionar();  

// Criando um pedido  
$pedido = new Pedido();  
$pedido->cliente = $cliente;  
$pedido->adicionarItem($produto, 2);  
$pedido->finalizar();  
```

## Tecnologias Usadas
- PHP  
- MySQL  
- HTML/CSS  
- JavaScript  

**Data da Criação:** 2026-04-08 18:28:49  

Este README fornece uma visão geral do Sistema de Pedidos, permitindo ao usuário entender rapidamente a funcionalidade e estrutura do projeto.