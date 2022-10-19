<?php

// Gerenciador de páginas

use App\Http\Request;
use App\Http\Response;
use App\Controller\Pages;



// ROTA HOME
$obRouter->get('/', [
    function () {
        return new Response(200, Pages\Home::getHome());
    }
]);

// ROTA DELETAR/EDITAR ENTREGAS
$obRouter->post('/', [
    function () {
        $request = new Request();
        return new Response(200, Pages\Home::actionsDelivery($request));
    }
]);



// ROTA SOBRE
$obRouter->get('/about', [
    function () {
        return new Response(200, Pages\About::getAbout());
    }
]);

// ROTA CADASTRO DE ENTREGAS
$obRouter->get('/newdelivery', [
    function () {
        $request = new Request();
        return new Response(200, Pages\RegisterDeliveries::getRegisterDeliveries($request));
    }
]);

// ROTA CADASTRO DE ENTREGAS (INSERT)
$obRouter->post('/newdelivery', [
    function ($request) {
        return new Response(200, Pages\RegisterDeliveries::insertDelivery($request));
    }
]);
