## Histórico do Projeto
<hr>

# 26/09/2022
Inicio do projeto 26/09/2022 : Começando com a separação da estrutura da aplicação e o autoload-composer.

<hr>

###### -> feat: Inclusão do utilitário responsável por renderizar as views.<br>

A classe View que encontra-se dentro de App/Utilitarios será repsonsável por retornar o conteúdo das Views que encontrarão em App/Resources/View/Paginas.
<hr>

 ###### -> fix: Tipagem dos métodos.<br>

Realizei a tipagem de alguns métodos que estavam sem "retorno".
<hr>

###### -> feat: Controller Home e Page.

Adicionei as classes Home e Page ao Controller de Paginas, onde o Page é responsável por manter um modelo genérico ás páginas futuras, como carregar o footer e o header e a Classe home é responsável por carregar o conteúdo da minha View, sendo assim, retornando a "Home" do site.<br>
<hr>

###### -> feat: Implementação de Rotas HTTP. (Request)

Inicializando a Implementação de Rotas HTTP, criei a classe REQUEST que será responsável por definir a rota das solicitações do usuário.
<hr>

###### -> feat: Implementação de Rotas HTTP.(Response)

Prosseguindo com a Implementação de Rotas HTTP, criei a classe RESPONSE que retorna para o navegador cabeçalhos e demais informações sobre a requisição.
