<?php

namespace App\Controller\Paginas;

use App\Utilitarios\View;

class Sobre extends Page{

//Metodo qu retornar o conteúdo(View) da PÁGINA SOBRE;
  public static function getSobre() :string
  {
    //Retorna a View da Sobre.
    $conteudo = View::render('Paginas/sobre',[
      "PageName" => "Sobre o Projeto",
      "Descrição" => "Seja bem vindo ao Entregas 2000,
      o Sistema de entregas perfeito para seu negócio."
    ]);

    //Retorna a View da Página
    return parent::getPage("Sobre > E2000", $conteudo);
  }

}



 ?>
