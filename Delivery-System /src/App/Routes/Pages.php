<?php

namespace src\App\Routes;

// Gerenciador de páginas

use src\Controllers\Pages;

$request = new Request();

// ROTA HOME
$obRouter->get('/', [
    function () {
        return new Response(200, Pages\ControllerPageHome::getHome());
    }
]);

// ROTA DELETAR/EDITAR ENTREGAS
$obRouter->post('/', [
    function () {
        $request = new Request();
        return new Response(200, Pages\ControllerPageHome::actionsDelivery($request));
    }
]);



// ROTA SOBRE
$obRouter->get('/about', [
    function () {
        return new Response(200, Pages\ControllerPageAbout::getAbout());
    }

]);



// ROTA CADASTRO DE ENTREGAS
$obRouter->get('/newdelivery', [
    function () {
        $request = new Request();
        return new Response(200, Pages\ControllerPageRegisterDeliveries::getRegisterDeliveries($request));
    }
]);

// ROTA CADASTRO DE ENTREGAS (INSERT)
$obRouter->post('/newdelivery', [
    function () {
        $request = new Request();
        return new Response(200, Pages\ControllerPageRegisterDeliveries::insertDelivery($request));
    }
]);
