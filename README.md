Cadastro de Funcionários

Este projeto foi desenvolvido como parte do desafio técnico para vaga de Desenvolvedor PHP com Laravel e Alpine.js.

## Descrição

Sistema simples de cadastro de funcionários, permitindo:
- Cadastro
- Edição
- Exclusão
- Listagem com busca interativa (Alpine.js)

## Tecnologias Utilizadas
- Laravel 12
- PHP 8.1+
- MySQL
- Alpine.js (interatividade frontend)
- TailwindCSS (estilização via CDN)

## Como rodar o projeto

1. **Clone o repositório:**
   ```bash
   git clone <seu-repo>
   cd desafio-tecnico
   ```
2. **Instale as dependências:**
   ```bash
   composer install
   ```
3. **Configure o ambiente:**
   - Copie o arquivo `.env.example` para `.env` e configure os dados do banco de dados MySQL.
   - Exemplo de configuração:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=desafio-tecnico
     DB_USERNAME=root
     DB_PASSWORD=senha
     ```
4. **Gere a chave da aplicação:**
   ```bash
   php artisan key:generate
   ```
5. **Rode as migrations:**
   ```bash
   php artisan migrate
   ```
6. **(Opcional) Popule o banco com dados de exemplo:**
   ```bash
   php artisan db:seed
   ```

## Como acessar
- Acesse `http://localhost:8000/funcionarios` após rodar:
  ```bash
  php artisan serve
  ```

## Funcionalidades
- Cadastro, edição e exclusão de funcionários
- Listagem com busca instantânea (Alpine.js)
- Validação de dados (backend e frontend)
- Layout responsivo e moderno

## Decisões técnicas
- Utilização de UUID como chave primária para maior segurança e escalabilidade
- Uso de migrations e seeders para facilitar testes e setup
- Interatividade na listagem feita com Alpine.js, sem dependências pesadas
- Estilização rápida com TailwindCSS via CDN
