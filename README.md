cls
===

## Requisitos
* PHP 5.3 ou mais recente
* Servidor Web (apache, ngix)
* SGBD (mysql, postgres)

## Alterar configurações
Altere o arquivo ** app/config/parameters.yml ** adicionando as informações de banco de dados, titulo do site e servidor smtp se necessário

obs: Se o arquivo parameters.yml não existir, copie o parameters.yml.sample.

## Instalar dependencias
O projeto utiliza o composer para gerenciar dependencias.

### Instalando composer
Siga esse guia para instalar composer no windows -> http://getcomposer.org/doc/00-intro.md#installation-windows

Depois de instalado use o comando ** composer install ** no terminal para instalar as dependencias e os comandos:
php app/console doctrine:database:create - para criar o banco de dados
php app/console doctrine:schema:create - para criar tabelas
php app/console fos:user:create - para criar usuário para o painel
php app/console fos:user:promote - para promover usuario (use a role: ROLE_SUPER_ADMIN)

## Resultado
Depois disso o site deverá estar acessível pelo http://localhost/cls/web/app_dev.php
