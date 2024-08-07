## Instalar o Projeto
## Requisitos
PHP 8.2 +
composer
mysql 8

## Como rodar o projeto baixado
Duplicar o ardivo .env.exemplo e renomea-lo para .env;
```
Alterar no novo arquivo .env as credenciais do banco de dados;
```
Instalar as dependencias do php
```
composer install
```

gerar a chave
```
php artisan key:generate
```

executa as migrations
```
php artisan migrate
```

# Cria um novo projeto
Cria o documento na pasta que está.
```
composer create-project laravel/laravel .
```
Altera no arquivo .env as credencias do Banco de dados e configurações de idioma

## Sequencia para rodar o projeto 

Para acessar a API é recomentdado usar o INSOMNIA para simular requisições à API;  

Criar o arquivo de rotas para api
```
php artisan install:api
```
Startar o projeto
```
php artisan serve
```


