<?php

// Gerenciador de páginas

use App\Http\Response;
use App\Controller\Paginas;

// ROTA HOME
$ob->get('/',[
    function(){
        return new Response(200, Paginas\Home::getHome());
    }
]);

// ROTA SOBRE
$ob->get('/sobre',[
    function(){
        return new Response(200, Paginas\Sobre::getSobre());
    }
]);





?>