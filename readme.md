Sobre o projeto:

Entregas 2000 - Trata-se de um sistema de entregas onde será possível, realizar o gerenciamento de suas entregas, possibilitando agilidade e fluidez no seu dia à dia.

Arquitetura utilizada: MVC<br>
Biblioteca : Bootstrap

Requisitos:

1. Docker-compose<br>
2. Porta 8000 liberada.

Passo a Passo para Rodar:<br>
Após clonar o repositório, crie um arquivo dentro de WWW com .env, utilize os parametros no .env.example como "exemplo".

Após criá-lo e salvá-lo, <br>

Abra a pasta SistemaDeEntregas em seu terminal e digite o comando:

1. docker-compose up -d<br>
2. Acesse localhost:8080 e veja que o banco de dados "Delivery_System" já estará criado.<br>
3. Realize a importação para dendo deste banco de dados, o sql que está na pasta "BancoDeDados" do projeto.<br>
4. Acesse localhost:8000 e usufrúa do projeto.<br>

OBS: Na pasta WWW encontra-se todo o projeto, portanto não delete-a.





