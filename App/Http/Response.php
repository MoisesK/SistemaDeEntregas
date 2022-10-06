<?php

namespace App\Http;

class Response{

  //Código do status HTTP
  private int $httpCode = 200;
  //Cabeçalho do Response
  private array $headers = [];
  //Tipo de Conteúdo que está sendo Retornado
  private string $contentType = 'text/html';
  //Conteúdo do Response
  private mixed $content;

  //Metodo responsável por inciar a classe e definir os valores
  public function __construct($httpCode,$content,$contentType = 'text/html')
  {
  $this->httpCode = $httpCode;
  $this->content = $content;
  $this->setContentType($contentType);

  }
  //Método responsável por alterar o ContentType
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
    $this->addHeader('Content-Type',$contentType);
  }

  //Metodo responsável por adicionar um registro no cabeçalho
  public function addHeader(string $chave,string $valor){
    $this->headers[$chave] = $valor;
  }

  //Método responsável por enviar os headers para o navegador
  public function sendHeaders(){
    //status
    http_response_code($this->httpCode);

    //enviar headers
    foreach($this->headers as $key=>$value){
      header($key.': '.$value);
    }
  }

  //Método repsonsável por enviar a resposta para o usuário "imprime o conetúdo"
  public function sendResponse(){
    //envia os headers
    $this->sendHeaders();

    //imprime o conteúdo
    switch ($this->contentType){
      case ($this->contentType = 'text/html'):
        echo $this->content;
        exit;
    }
  }
}
