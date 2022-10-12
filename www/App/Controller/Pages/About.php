<?php

namespace App\Controller\Pages;

use App\Util\View;

class About extends Page
{
  public static function getAbout(): string
  {
    //Metodo qu retornar o conteúdo(View) da PÁGINA SOBRE;
    $conteudo = View::render('Pages/about', [
      "PageName" => "Sobre o Projeto",
      "Descrição" => "Seja bem vindo ao Entregas 2000,
      o Sistema de entregas perfeito para seu negócio."
    ]);

    //Retorna a View da Página
    return parent::getPage("Sobre > E2000", $conteudo);
  }
}
