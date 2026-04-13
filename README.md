
# 📦 Sistema de Pedidos

Sistema orientado a objetos desenvolvido em PHP, simulando o funcionamento
de um sistema de pedidos com clientes, produtos e itens interligados.

Projeto desenvolvido como trabalho acadêmico do curso de
Análise e Desenvolvimento de Sistemas.

---

## 🗂️ Estrutura do Projeto

Sistema-de-Pedidos/
├── Cliente.php → Classe do cliente (nome, email)
├── Produto.php → Classe do produto (nome, preço)
├── ItemPedido.php → Liga produto + quantidade
├── Pedido.php → Agrega itens e calcula total
└── index.php → Executa e exibe tudo

text

---

## 🧱 Conceitos Aplicados

- **Encapsulamento** — atributos `private` com getters e setters
- **Tipagem estrita** — `declare(strict_types=1)` em todos os arquivos
- **`final class`** — classes fechadas para herança
- **4 tipos de relacionamento entre classes:**
  - **Associação** → `Pedido` usa `Cliente`
  - **Composição** → `Pedido` contém `ItemPedido`
  - **Agregação** → `ItemPedido` referencia `Produto`
  - **Dependência** → `adicionarItem(ItemPedido $item)`

---

## ▶️ Como executar

```bash
php index.php
```

---

## 🛠️ Tecnologias

- PHP 8+
- Git / GitHub

---

## 👤 Autor

**Pedro Santos**
GitHub: [@pedrosantos11-ads](https://github.com/pedrosantos11-ads)

---

## 📝 Créditos

README elaborado com o auxílio de **Perplexity AI**.
