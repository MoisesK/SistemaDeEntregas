<?php

namespace src\App\Routes;

// Gerenciador de páginas

use src\Controllers\PageAboutController;
use src\Controllers\PageHomeController;
use src\Controllers\PageRegisterDeliveriesController;


$request = new Request();

// ROTA HOME
$obRouter->get('/', [
    function () {
        return new Response(200, PageHomeController::getHome());
    }
]);

// ROTA DELETAR/EDITAR ENTREGAS
$obRouter->post('/', [
    function () {
        $request = new Request();
        return new Response(200, PageHomeController::actionsDelivery($request));
    }
]);



// ROTA SOBRE
$obRouter->get('/about', [
    function () {
        return new Response(200, PageAboutController::getAbout());
    }

]);



// ROTA CADASTRO DE ENTREGAS
$obRouter->get('/newdelivery', [
    function () {
        $request = new Request();
        return new Response(200, PageRegisterDeliveriesController::getRegisterDeliveries($request));
    }
]);

// ROTA CADASTRO DE ENTREGAS (INSERT)
$obRouter->post('/newdelivery', [
    function () {
        $request = new Request();
        return new Response(200, PageRegisterDeliveriesController::insertDelivery($request));
    }
]);
