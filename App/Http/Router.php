<?php

namespace App\Http;

class Router{
    //URL Completa do projeto (raiz)
    private string $url = '';
    //Prefixo de todas as rotas
    private string $prefix;
    //índice de rotas
    private array $routes = [];
    //Instancia de requisição
    private Request $request;
   
    public function __construct(string $url)
    {
        $this->request = new Request();
        $this->url = $url;
    }
    


}