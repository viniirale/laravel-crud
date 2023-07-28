# Laravel CRUD Project

![Laravel Version](https://img.shields.io/badge/Laravel-v9.52.11-blue)
![PHP Version](https://img.shields.io/badge/PHP-v8.0.28-brightgreen)

## Descrição do Projeto

Este é um projeto CRUD (Create, Read, Update, Delete) desenvolvido com o framework Laravel. O projeto permite que você gerencie produtos e categorias em um sistema de e-commerce básico.

## Requisitos

- PHP 8.0 ou superior
- Composer
- XAMPP v3.3.0 (ou servidor web equivalente)
- MariaDB ou MySQL

## Configuração

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
```
3. suba o apache e o MySQL

4. abra o XAMPP e crie o banco "laravel_crud_db"

5. Acesse a pasta do projeto:
```bash
cd nome-do-repositorio
```
6. Instale as dependências do projeto:
```bash
composer install
```
7.  Edite o arquivo .env e defina as seguintes variáveis de ambiente:
```makefile
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crud_db
DB_USERNAME=root
DB_PASSWORD=
```
7. Execute as migrações do banco de dados já colocando o seed para ter as informações inseridas no banco:
```bash
php artisan migrate:fresh --seed
```
O servidor estará rodando em
```
http://localhost
```
