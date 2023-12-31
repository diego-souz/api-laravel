<h1>API CRUD LARAVEL 10/Mysql com autenticação</h1>

<h4>
API utilizando laravel 10 com CRUD para banco de dados Mysql e autenticação de usuário usando Sanctum.
</h4>

Curso: https://www.youtube.com/playlist?list=PLyugqHiq-SKdFqLIM3HgCAnG8_7wUqHMm

Pré-requisitos: PHP 8.1, Composer e Mysql instalados


1. Baixar laravel e criar projeto:
    composer create-project laravel/laravel api-laravel

2. Abrir diretório do projeto:
    cd api-laravel/

3. Criar banco de dados mysql e atualizar arquivo .env com nome e dados para acesso do banco;

4. Criar model/controler/factories/migrations para novo objeto:
    php artisan make:model invoice -cfm

5. Em /database/migrations/ localizar o arquivo de criação da tabela do novo objeto, incluir as novas colunas necessárias;

6. Executar comando para criar a tabela:
    php artisan migrate

7. Caso necessário popular as tabelas com dados aleatórios, modificar os arquivos de cada tabela em /database/factories/
   e adicionar em /database/seeders/DatabaseSeeder.php o comando com a quantidade de registros a serem gerados em cada tabela;

8. Executar o comando para criar os registros: 
    php artisan db:seed

9. Criar o arquivo controller com os métodos CRUD de cada tabela: 
    php artisan make:controller Api/V1/InvoiceController --resource

10. Em /app/Http/Controllers modificar os métodos criados para o CRUD;

11. Em /routes/api.php definir as rotas para cada método;

12. Criar os arquivos resource para formatar o retorno do database:
    php artisan make:resource V1/UserResource
    
13. Modificar o arquivo resource dentro do diretório /app/Http/Resources caso necessário;

14. Caso precise recriar as tabelas, executar o comando:
        php artisan migrate:fresh

    ou adicione -seed ao final para recriar com os registros aleatórios:
        php artisan migrate:fresh --seed

15. Iniciar o server para testar no navegador:
    php artisan serve

16. Traduzir laravel para PT-br: 
    https://github.com/lucascudo/laravel-pt-BR-localization

17. Para padronizar o formato Json para sucesso e falha, criar os arquivos HttpResponse em /app/Traits

18. Para realizar filtros no get, adicionar em /app/Filters/ as regras de filtros permitidos


