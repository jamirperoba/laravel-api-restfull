## Laravel api-restfull

Exemplo básico de api com o framework laravel

Coloque o projeto dentro do diretório que esta rodando seu localhost

1 - (composer install) para instalar as dependências do projeto 

2 - Alterar arquivo (.env) para suas configurações

2 - (php artisan key:generate) criar chave da aplicação

3 - Criar banco com o nome (laravel-api-restfull) ou que você preferir

4 - (php artisan migrate) para criar as tabelas no banco


## Exemplos

Para testar pode utilizar o https://www.getpostman.com/

###verbo GET /ID 
Listar todos os registros
```
http://localhost/laravel-api-restfull/public/api/students/

http://localhost/laravel-api-restfull/public/api/schools
```

###verbo GET 
Listar apenas um registro
```
http://localhost/laravel-api-restfull/public/api/students/1

http://localhost/laravel-api-restfull/public/api/schools/1
```

###verbo POST 
Inserir registros
```
http://localhost/laravel-api-restfull/public/api/students/

{
	"name": "nome exemplo novo",
	"cpf": "11111111111",
	"address": "endereco exemplo novo",
	"school_id":1
}

http://localhost/laravel-api-restfull/public/api/schools/

{
	"name": "escola exemplo novo",
	"email": "exemplo@exemplonovo.com",
	"fone": "9999999",
	"address": "endereco exemplo novo"
}
```
###verbo PUT /ID
Editar registro especifico
```
http://localhost/laravel-api-restfull/public/api/schools/1

{
	"name": "escola exemplo update",
	"email": "exemplo@exemploupdate.com",
	"fone": "9999999",
	"address": "endereco exemplo update"
}
```

###verbo DELETE
Editar registro especifico
```
http://localhost/laravel-api-restfull/public/api/students/1

http://localhost/laravel-api-restfull/public/api/schools/1
```

## Conteúdo utilizado 

https://rafaell-lycan.com/2015/construindo-restful-api-laravel-parte-1/
https://rafaell-lycan.com/2016/construindo-restful-api-laravel-parte-2/