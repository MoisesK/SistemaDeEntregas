<?php

namespace App\Http;

use \Closure;
use \Exception;

class Router{
    //URL Completa do projeto (raiz)
    private string $url = '';
    //Prefixo de todas as rotas
    private $prefix;
    //índice de rotas
    private array $routes = [];
    //Instancia de requisição
    private Request $request;
   
    public function __construct(string $url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    private function getPrefix()
    {
        return $this->prefix;
    }
    //Método que define o prefixo das rotas
    private function setPrefix() :void
    {
        //Info da Url
        $parseUrl = parse_url($this->url);
        //Define o Prefixo
        $this->prefix = $parseUrl['path'] ?? '';
    }

    // Método responsável por adicionar uma rota na Classe
    private function addRoute(string $method,string $route,array $params = []) :void
    {
        // Valida Parametros
        foreach($params as $chave=>$valor){
            if($valor instanceof Closure){
                //Método para identificar o parametro passado
                $params['controller'] = $valor;
                unset($params[$chave]);
            }
        }

        // Padrão de validação da URL
        $patternRoute = '/^'.str_replace('/','\/',$route).'$/';

        // Adiciona a rota á classe
        $this->routes[$patternRoute][$method] = $params;

    }

    // Método responsável por definir uma rota GET
    public function get(string $route, array $params = []) :void
    {
        $this->addRoute('GET',$route,$params);
    }

    // Retorna array com dados da rota atual
    private function getRoute() 
    {
        // Retorna URI
        $uri = $this->request->getUri();

        //Reduz o prefixo da URI
        $xUri = strlen($this->getPrefix()) ? explode($this->getPrefix(),$uri) : [$uri];

        //URI sem Prefixo
        $uri1 = end($xUri);
        
        //Metodo dessa requisição
        $httpMethod = $this->request->getHttpMethod();

        //Valida as rotas
        foreach($this->routes as $patternroute=>$methods)
        {
            // Verifica se a URI bate com o Padrão
            if(preg_match($patternroute,$uri)){
                // Verificao método
                if($methods[$httpMethod]){
                    // Retorno dos Parametros da Rota
                    return $methods[$httpMethod];
                }

                // Método não permitido
                throw new Exception("Método não permitido", 405);
                
            }
        }
        
        //URL NÃO ENCONTRADA
        throw new Exception("URL não encontrada", 404);
    
    }

    // Método responsável por executar a rota
    public function run()
    {
        // Validação de rotas
        try {
            $route = $this->getRoute(); //obtem a rota atual
            echo "<pre>";
            print_r($route);
            echo "<pre>";
            exit;

        }catch (Exception $e) 
        {
            return new Response($e->getCode(),$e->getMessage());
        }
    }
    


	
}