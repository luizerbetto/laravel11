# laravel11

### Este README fornece informações sobre o projeto, incluindo detalhes sobre as funcionalidades CRUD para a tabela de usuários, login, logout e integração com a API do IBGE.

# Funcionalidades
* CRUD para a tabela de usuários
    * Criar: Permite criar novos usuários, incluindo nome, e-mail, senha e nível de acesso.
    * Ler: Permite visualizar a lista de usuários e os detalhes de um usuário específico.
    * Atualizar: Permite editar os dados de um usuário existente.
    * Excluir: Permite excluir um usuário.
* Login
Permite autenticar um usuário com e-mail e senha.
Gera um token de acesso para o usuário após o login.
* Logout
Permite invalidar o token de acesso do usuário, encerrando a sessão.
Requer autenticação com token para ser acessado.
* Integração com a API do IBGE
Função para conectar e receber dados JSON da API do IBGE.
Filtra os dados com base no nível de acesso do usuário:
Nível 1: Acesso completo (Regiões, Estados (UF) e Cidades).
Nível 2: Acesso intermediário (Regiões e Estados (UF)).
Nível 3: Acesso restrito (apenas Regiões).
## Tecnologias utilizadas
* PHP
* Laravel
* SQLite
## Instalação
Clone o repositório.
Instale as dependências com composer install.
Configure as variáveis de ambiente no arquivo .env.
Crie o banco de dados SQLite.
Execute as migrations com php artisan migrate.
## Uso
Inicie o servidor de desenvolvimento com php artisan serve.
Acesse a aplicação no navegador.
## Rotas
Rotas para as funcionalidades CRUD de usuário.
Rotas para login e logout.
Rota para a função do IBGE, protegida por middleware de autenticação.
## Middleware
Middleware de autenticação para proteger rotas que exigem token de acesso.
A URL da API do IBGE é armazenada em uma variável de ambiente para evitar exposição no código-fonte.
# Documentação da API
Este projeto possui uma API RESTful. A documentação das rotas está disponível aqui: postman\api laravel.postman_collection.json