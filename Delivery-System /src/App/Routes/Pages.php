<?php

// Gerenciador de páginas

use src\App\Routes\Request;
use src\App\Routes\Response;
use src\App\Routes\Router;
use src\Controllers\Pages;

$request = new Request();

// ROTA HOME
$obRouter->get('/', [
    function () {
        return new Response(200, Pages\Home::getHome());
    }
]);

// ROTA DELETAR/EDITAR ENTREGAS
$obRouter->post('/', [
    function ($request) {
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
    function ($request) {
        $request = new Request();
        return new Response(200, Pages\RegisterDeliveries::getRegisterDeliveries($request));
    }
]);

// ROTA CADASTRO DE ENTREGAS (INSERT)
$obRouter->post('/newdelivery', [
    function ($request) {
        $request = new Request();
        return new Response(200, Pages\RegisterDeliveries::insertDelivery($request));
    }
]);
