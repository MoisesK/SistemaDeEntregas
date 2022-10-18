<?php

namespace App\Controller\Pages;

use App\Util\View;

class About extends Page
{
  public static function getAbout(): string
  {
    //Metodo qu retornar o conteúdo(View) da PÁGINA SOBRE;
    $content = View::render('Pages/About', [
      "PageName" => "Sobre o Projeto",
      "Descript" => "<h2>Entregas 2000</h2> <br>
      Trata-se de um sistema de entregas onde será possível, realizar o gerenciamento de suas entregas, possibilitando agilidade e fluidez no seu dia à dia.<br>Arquitetura utilizada: MVC<br>Biblioteca : Bootstrap",
    ]);

    return parent::getPage("Sobre > E2000", $content);
  }
}
