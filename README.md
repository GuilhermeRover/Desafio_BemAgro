## Desafio BemAgro

Desafio elaborado pela empresa BemAgro para vaga de Desenvolvedor PHP.

## Requisitos do desafio:

- **[Laravel 7.x](https://laravel.com/)**;
- **PHP 7.2**;
- **[MySql](https://www.mysql.com/downloads/)**.
- Efetuar login;
- Consumir a API do GitHub;
- Buscar um usuário na API do GitHub com base no username;
- Montar uma lista com os usuários informados salvando no banco de dados;
- Ao clicar no nome do usuário, acessar uma tela com detalhamento, onde precisa mostrar as informações retornadas da API;
- Remover usuário da lista e do banco de dados;
- Documentação do GitHub: https://docs.github.com/pt/free-pro-team@latest/rest .

## Prazos e datas do desafio:
- Envio do Desafio pela BemAgro: 22/11/2021 às 5:48 PM;
- Prazo final para entrega: 26/11/2021 às 09:00 AM;
- Início em: 22/11/2021 às 10:30 PM;
- Entrega em:
## Setup instalado:

- **[Laravel 7.x](https://laravel.com/)**;
- **[Tailwind CSS](https://tailwindcss.com/)**, framework css.
- **[Alpine.js](https://alpinejs.dev/)**, biblioteca javascript base.
- **[Boxicons](https://boxicons.com/)**, biblioteca de ícones diversos.

## Instalação

Para começar a instalação, precisamos clonar o projeto:

```shell
    git clone git@github.com:GuilhermeRover/Desafio_BemAgro.git
```
Entre na pasta do projeto:
```shell
    cd Desafio_BemAgro/
```
Baixe e instale as dependências do projeto:
```shell
    composer install && npm install && npm run dev
```
Agora criamos o arquivo .env do seu backup, já que o git exclui este arquivo por motivos de segurança para seus dados sensíveis não vazarem.
```shell
    cp .env.example .env
```
Agora devemos criar a chave de criptografia no arquivo .env.
```shell
    php artisan key:generate
```
Só falta rodar o projeto e aproveitar! o Laravel já nos dá pronto ferramentas para testar a aplicação.
```shell
    php artisan serve
```
