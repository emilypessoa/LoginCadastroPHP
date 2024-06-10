# Aplicação PHP com Bootstrap

Este projeto é uma pequena aplicação web desenvolvida em com Bootstrap 5. Ele contém uma tela principal (index.php), uma tela de login (login.php) e uma tela de cadastro (cadastro.php).



## Estrutura do Projeto

- `index.php`: Página principal da aplicação.
- `login.php`: Página de login onde os usuários podem se autenticar.
- `cadastro.php`: Página de cadastro onde novos usuários podem se registrar.

## Banco de Dados

A aplicação considera a existência de um banco de dados, que ainda será criado, com as seguintes tabelas:

### Tabela cadUser
- `idcadUser`: INT [PrimaryKey]
- `name`: VARCHAR
- `password`: VARCHAR
- `email`: VARCHAR
- `tipoUser`: INT

### Tabela tbLogin
- `idtbLogin`: INT
- `dtHoraLogin`: TIMESTAMP
- `cadUser_idcadUser`: INT [foreignKey]

## Funcionalidades

### Tela Principal (index.php)
A tela principal dá boas-vindas aos usuários e possui um botão "GitHub" que redireciona para o GitHub. A estrutura do HTML utiliza Bootstrap para estilização e responsividade.

### Tela de Login (login.php)
A tela de login permite que os usuários façam login na aplicação. 

### Tela de Cadastro (cadastro.php)
A tela de cadastro permite que novos usuários se registrem na aplicação. 


## Como Executar

1. Certifique-se de ter o PHP instalado em seu ambiente.
2. Faça o download ou clone este repositório.
3. Coloque os arquivos em seu servidor web local (por exemplo, XAMPP ou WAMP).
4. Abra o navegador e navegue até `http://localhost/nome_do_projeto/`.

## Estilização

A aplicação utiliza o Bootstrap 5 para estilização. As cores de fundo e texto foram ajustadas para um tema escuro.

## Créditos

- Aplicação PHP com Bootstrap 5, by [Bootstrap](https://getbootstrap.com/).
- Projeto criado por [@emilyrodriguespessoa](https://www.linkedin.com/in/emily-rodrigues-pessoa-186a93268?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app).
