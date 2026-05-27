# 🏪 Sistema de Guarda-Volumes

Sistema web para controle de itens guardados, com cadastro de registros e visualização de informações.

## 🛠️ Tecnologias

- PHP
- MySQL
- HTML5
- MySQLi

## 📋 Funcionalidades

- Cadastro de itens no banco de dados via formulário
- Visualização de informações dos itens cadastrados
- Persistência de dados com MySQL

## 🗄️ Banco de Dados

- **Banco:** `guarda`
- Conexão via MySQLi

## 📁 Estrutura

```
guarda/
├── index.php           # Página inicial
├── cadastrarBanco.php  # Persistência de novos itens
└── informacoes.php     # Visualização dos registros
```

## ▶️ Como executar

1. Importe o banco `guarda` no MySQL
2. Configure as credenciais de conexão nos arquivos PHP
3. Sirva o projeto em um servidor local (XAMPP, Laragon, etc.)
4. Acesse `index.php` no navegador

## 👤 Autor

Mauá Giunco — [github.com/porteiro1](https://github.com/porteiro1)
