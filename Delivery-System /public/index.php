<?php
echo  'public' . __DIR__ . '/../vendor/autoload.php';
exit;

require 'public' . __DIR__ . '/../vendor/autoload.php';
exit;

use App\Routes\Router;
use Model\Helper;
use App\Util\View;
use WilliamCosta\DatabaseManager\Database;
use WilliamCosta\DotEnv\Environment;

//Inicia e carrega SESSÃO de mensagens
session_start();

Helper::getSMessage();

// Carrega Variaveis de ambiente
Environment::load(__DIR__ . '/../');

// Define as configurações de Banco de Dados
Database::config(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_PORT'));

// Define a constante de URL do projeto
define('URL', getenv('URL'));

// Define valor padrão das variáveis
View::init([
    'URL' => URL
]);

// Inicia o roteador
$obRouter = new Router(URL);

// Inclui as Rotas de Páginas
include __DIR__ . '/../Routes/Pages.php';

// Imprime as Páginas
$obRouter->run()->sendResponse();
