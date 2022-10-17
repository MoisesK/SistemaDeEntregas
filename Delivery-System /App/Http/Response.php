<?php

namespace App\Http;

class Response
{
  private int $httpCode = 200;
  private array $headers = [];
  private string $contentType = 'text/html';
  private string $content;

  public function __construct($httpCode, $content, $contentType = 'text/html')
  {
    $this->httpCode = $httpCode;
    $this->content = $content;
    $this->setContentType($contentType);
  }

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
    $this->addHeader('Content-Type', $contentType);
  }

  public function addHeader(string $chave, string $valor)
  {
    $this->headers[$chave] = $valor;
  }

  public function sendHeaders()
  {

    http_response_code($this->httpCode);

    foreach ($this->headers as $key => $value) {
      header($key . ': ' . $value);
    }
  }

  public function sendResponse()
  { //Método repsonsável por enviar a resposta para o usuário "imprime o conteúdo"
    
    $this->sendHeaders();

    //imprime o conteúdo
    switch ($this->contentType) {
      case ($this->contentType = 'text/html'):
        echo $this->content;
        exit;
    }
  }
}