<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Utilitarios\View;
use WilliamCosta\DatabaseManager\Database;
use WilliamCosta\DotEnv\Environment;

// Carrega Variaveis de ambiente
Environment::load(__DIR__.'/../');

// Define as configurações de Banco de Dados
Database::config(getenv('DB_HOST'),getenv('DB_NAME'),getenv('DB_USER'),getenv('DB_PASS'),getenv('DB_PORT'));


// Define a constante de URL do projeto
define('URL', getenv('URL'));

// Define valor padrão das variáveis
View::init([
    'URL' => URL
]);


?>