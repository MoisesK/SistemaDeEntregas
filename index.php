<?php

require __DIR__ .'/Includes/App.php';

use App\Http\Router;

// Inicia o roteador
$ob = new Router(URL);

// Inclui as Rotas de Páginas
include __DIR__ .'/routes/Pages.php';

// Imprime as Páginas
$ob->run()->sendResponse();
