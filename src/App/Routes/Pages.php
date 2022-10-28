<?php

namespace src\App\Routes;

// Gerenciador de páginas

use src\Controllers\AboutController;
use src\Controllers\HomeController;
use src\Controllers\RegisterDeliveriesController;


$request = new Request();

// ROTA HOME
$obRouter->get('/', [
    function () {
        return new Response(200, HomeController::getHome());
    }
]);

// ROTA DELETAR/EDITAR ENTREGAS
$obRouter->post('/', [
    function () {
        $request = new Request();
        return new Response(200, HomeController::actionsDelivery($request));
    }
]);



// ROTA SOBRE
$obRouter->get('/about', [
    function () {
        return new Response(200, AboutController::getAbout());
    }

]);



// ROTA CADASTRO DE ENTREGAS
$obRouter->get('/newdelivery', [
    function () {
        $request = new Request();
        return new Response(200, RegisterDeliveriesController::getRegisterDeliveries($request));
    }
]);

// ROTA CADASTRO DE ENTREGAS (INSERT)
$obRouter->post('/newdelivery', [
    function () {
        $request = new Request();
        return new Response(200, RegisterDeliveriesController::insertDelivery($request));
    }
]);
