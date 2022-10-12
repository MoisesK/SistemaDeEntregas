<?php

// Gerenciador de páginas

use App\Http\Request;
use App\Http\Response;
use App\Controller\Pages;

// ROTA HOME
$ob->get('/',[
    function(){
        return new Response(200, Pages\Home::getHome());
    }
]);

// ROTA DELETAR/EDITAR ENTREGAS
$ob->post('/',[
    function(){
        $request = new Request();
        return new Response(200, Pages\Home::acoesDelivery($request));
    }
]);



// ROTA SOBRE
$ob->get('/sobre',[
    function(){
        return new Response(200, Pages\About::getAbout());
    }
]);

// ROTA CADASTRO DE ENTREGAS
$ob->get('/novaentrega',[
    function(){
        return new Response(200, Pages\RegisterDeliveries::getRegisterDeliveries());
    }
]);

// ROTA CADASTRO DE ENTREGAS (INSERT)
$ob->post('/novaentrega',[
    function(){
        $request = new Request();
        return new Response(200, Pages\RegisterDeliveries::insertDelivery($request));
    }
]);