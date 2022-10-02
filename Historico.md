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
<hr>

# 28/09/2022

<hr>

##### -> feat: Implementação de Rotas HTTP.  (Router) v1

###### -> V1
Prosseguindo com a Implementação de Rotas HTTP, criei a classe ROUTER onde será responsável pelo direcionamento das rotas.

v1. Metódo construtor e atributos base.

###### -> V2

v2. Métodos de validação para as rotas, incluíndo validação da URI, URL, Método Http...
<hr>

# 30/09/2022

<hr>

###### -> fix: Router não encontra URL mesmo se existente.

Router de home não estava direcionando a URL independente dos parametros, corrigido o erro e criado variável para receber e retornar a URI sem o prefíxo.

<hr>

###### -> upt: $uriSemPre responsável pela URI sem prefixo

Update na nomenclatura da variável criada no Fix anterior para deixá-la legível.

<hr>

###### -> feat: Rota método POST e Verificações

Adicionado ao ROUTER uma rota para utilização do Método POST e verificação de argumentos para que seja possível retornar a página na função RUN do ROUTER.

<hr>

###### -> feat: .htaccess - reescrita de URL

Adicionei o .htaccess para configurar a reescrita da URL, pois ao passar o parâmetro na url de uma página inexistente não estava caindo no erro configurado no ROUTER.

Com este arquivo ele buscará a pasta com a .index do prefixo passado na URL.

<hr>

###### -> feat: Pages.php para organização das rotas.

Criado pasta ROUTES com arquivo Pages.php para gerenciamento das rotas, evitando assim uma sobrecarga na index.

<hr>

###### -> feat: Controller e View da Página Sobre.

<hr>

###### -> feat: Função define variáveis comuns no projeto.

Criado uma função padrão para que seja possível a definição de variáveis comuns no projeto.
REAPROVEITAMENTO DE CÓDIGO.

<hr>

###### -> feat: Nav-Bar funcional.

Criado uma NAV-BAR 100% FUNCIONAL utilizando o gerenciamento de rotas.

<hr>

# 02/09/2022

<hr>

###### -> feat: Repositorio: gestão de varíaveis de ambiente

Adicionado um reposítorio composer para ajudar na gestão de variáveis de ambiente.

<hr>

###### -> update: Rep. gestão de varíaveis de ambiente.

<hr>

###### -> feat: Inicio Models do sistema.

Criado arquivos das Models de Entregador e Entregas.

<hr>

###### -> feat: Implements páginas de cadastro.

Implementação das páginas(views e controllers) e formulários das páginas que serão utilizadas para o cadastro de novas entregas e entregadores.

<hr>


