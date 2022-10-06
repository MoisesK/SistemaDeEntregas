<?php

namespace App\Http;

  class Request{

  //Atributo HTTP da requisição
  private string $httpMethod;
  //URI da página
  private string $uri;
  //Parâmetros da URL ($_GET)
  private array $queryParams = [];
  //Parametros recebidos via post ($_POST)
  private array $postVars = [];
  //Cabeçalho da Requisição
  private array $headers = [];

  public function __construct()
  {
    $this->queryParams = $_GET ?? [];
    $this->postVars = $_POST ?? [];
    $this->headers = getallheaders();
    $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
    $this->setUri();
  }

  // Método responsável por definir a URI
  private function setUri(){
    // URI com GETS
    $this->uri = $_SERVER['REQUEST_URI'] ?? '';

    //Remove GETS da URI
    $xURI = explode('?',$this->uri);
    $this->uri = $xURI[0];
  }

  // Método responsável por retornar o Router
  public function getRouter(){
    return $this->router;
  }

  //Metódos para obter os retornos.
  public function getHttpMethod() :string
  {
    return $this->httpMethod;
  }

  public function getUri() :string
  {
    return $this->uri;
  }

  public function getQueryParams() :array
  {
    return $this->queryParams;
  }

  public function getPostVars() :array
  {
    return $this->postVars;
  }

  public function getHeaders() :array
  {
    return $this->headers;
  }


  }
