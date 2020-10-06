## API Nofaro

## Informações

- Desenvolvido com PHP 7.3., Laravel Framework 8.8.0, MySQL 8.0;

## Preparando o Projeto

- Crie uma base de dados com o nome de **base_nofaro**, ou com o nome de sua preferência.

- Clone o projeto
	- git clone https://github.com/tiagoalvesdev/api-nofaro.git

- Após o download, acesso o projeto
	- cd api-nofaro

- Agora você precisa ajustar seu arquivo de conexāo com o banco (.env)
	- cp .env.example .env

- Abra o arquivo **.env** e altere o valor da váriavel DB_DATABASE para **base_nofaro**, ou o nome que escolheu para sua base e salve o arquivo
	- DB_DATABASE=base_nofaro

- Instale o composer
	- composer install

- Agora vamos preparar as informações da nossa base, utilizando **migration** e **seeds**
	- php artisan migrate
	- php artisan db:seed

## Iniciando a aplicação

- Agora iremos subir a aplicação. Após a execução do comando abaixo, você deverá acessar seu nevegador e na URL digitar http://127.0.0.1:8000/
	- php artisan serve

- Agora com nossa aplicação funcionando, iremos executar a limpeza de cache e o autoload de nossa aplicação
	- php artisan cache:clear
	- composer dump-autoload

- Gerando a key
	- php artisan key:generate

## Rotas disponiveis no sistema

Method      | URI                                      	| Action
----------- | ---------------------------------------- 	| --------------------------------------------------
POST     	| api/attendance              			   	| App\Http\Controllers\AttendancesController@store 
POST     	| api/attendance/pet          				| App\Http\Controllers\AttendancesController@insert 	
GET HEAD 	| api/attendance              				| App\Http\Controllers\AttendancesController@index  
PATCH    	| api/attendance/{attendance}      			| App\Http\Controllers\AttendancesController@update 
DELETE   	| api/attendance/{attendance}				| App\Http\Controllers\AttendancesController@delete 
GET HEAD 	| api/attendance/{name?}					| App\Http\Controllers\AttendancesController@show   
GET HEAD 	| api/pets 									| App\Http\Controllers\PetsController@index         
POST     	| api/pets                    				| App\Http\Controllers\PetsController@store         
GET HEAD 	| api/pets/{name?}            				| App\Http\Controllers\PetsController@showName      
PATCH    	| api/pets/{pet}              				| App\Http\Controllers\PetsController@update        
DELETE   	| api/pets/{pet}              				| App\Http\Controllers\PetsController@delete


- Testes no Postman
	- Os testes realizados nas rotas, foram com o [Postman](https://www.postman.com/)

	- Para os parametros dos métodos POST
		- Inseri os dados em *Body* e *x-www-form-urlencoded*

- Documentação das rotas/metodos [neste link](https://documenter.getpostman.com/view/12479411/TVRha8MB)

	- Caso utilize o **Postman** para realizar os testes, você pode baixar este [arquivo json](https://drive.google.com/file/d/195iS4ctq8Kn2JczzQlqHSlomuhQnZ_v6/view?usp=sharing) e upar na ferramenta e obter todos os rotas ja configuradas.
