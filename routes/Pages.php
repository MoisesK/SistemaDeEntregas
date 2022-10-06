<?php

// Gerenciador de páginas

use App\Http\Request;
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

// ROTA CADASTRO DE ENTREGAS
$ob->get('/novaentrega',[
    function(){
        return new Response(200, Paginas\CadastraEntregas::getCadastraEntregas());
    }
]);

// ROTA CADASTRO DE ENTREGAS (INSERT)
$ob->post('/novaentrega',[
    function(){
        $request = new Request();
        return new Response(200, Paginas\CadastraEntregas::insertEntrega($request));
    }
]);
