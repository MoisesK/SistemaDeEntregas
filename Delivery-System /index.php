<?php

require_once __DIR__ . '/Requires/App.php';

use App\Http\Router;

// Inicia o roteador
$ob = new Router(URL);

// Inclui as Rotas de Páginas
include __DIR__ . '/Routes/Pages.php';

// Imprime as Páginas
$ob->run()->sendResponse();
