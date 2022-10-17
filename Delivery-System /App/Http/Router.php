<?php

namespace App\Http;

use \Closure;
use \Exception;

class Router
{
    private string $url = '';
    private $prefix;
    private array $routes = [];
    private Request $request;

    public function __construct(string $url)
    {
        $this->request = new Request($this);
        $this->url = $url;
        $this->setPrefix();
    }

    private function getPrefix()
    {
        return $this->prefix;
    }

    private function setPrefix(): void
    {
        $parseUrl = parse_url($this->url);

        $this->prefix = $parseUrl['path'] ?? '';
    }

    private function addRoute(string $method, string $route, array $params = []): void
    {
        // Valida Parametros
        foreach ($params as $key => $value) {
            if ($value instanceof Closure) {
                //Método para identificar o parametro passado
                $params['controller'] = $value;
                unset($params[$key]);
            }
        }

        // Padrão de validação da URL
        $patternRoute = '/^' . str_replace('/', '\/', $route) . '$/';

        $this->routes[$patternRoute][$method] = $params;
    }

    public function get(string $route, array $params = []): void
    {     // Método responsável por definir uma rota GET
        $this->addRoute('GET', $route, $params);
    }

    public function post(string $route, array $params = []): void
    {    // Método responsável por definir uma rota POST
        $this->addRoute('POST', $route, $params);
    }


    private function getRoute()
    {    // Retorna array com dados da rota atual e valida a rota

        $uri = $this->request->getUri();

        $xUri = strlen($this->getPrefix()) ? explode($this->getPrefix(), $uri) : [$uri];

        //URI sem Prefixo
        $uriSemPre = end($xUri);

        $httpMethod = $this->request->getHttpMethod();

        //Valida as rotas
        foreach ($this->routes as $patternroute => $methods) {
            // Verifica se a URI bate com o Padrão
            if (preg_match($patternroute, $uriSemPre)) {
                // Verificão de método
                if ($methods[$httpMethod]) {
                    // Retorno dos Parametros da Rota
                    return $methods[$httpMethod];
                }

                throw new Exception("Método não permitido", 405);
            }
        }

        throw new Exception("URL não encontrada", 404);
    }


    public function run()
    {    // Método responsável por executar a rota

        try { // Validação de rotas

            $route = $this->getRoute();

            // Verifica o controlador
            if (!isset($route['controller'])) : throw new Exception("URL não pôde ser processada", 500);
            endif;

            $args = [];

            // Retorna a execução da função
            return call_user_func_array($route['controller'], $args);
        } catch (Exception $e) {
            return new Response($e->getCode(), $e->getMessage());
        }
    }
}
