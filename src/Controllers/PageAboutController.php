<?php

namespace src\Controllers;

use src\App\Util\View;

class PageAboutController extends PageController
{
  public static function getAbout(): string
  {
    //Metodo qu retornar o conteúdo(View) da PÁGINA SOBRE;
    $content = View::render('Pages/About', [
      "PageName" => "Sobre o Projeto",
      "Descript" => "O Entregas 2000<br>
      Trata-se de um sistema de entregas onde será possível, realizar o gerenciamento de suas entregas, possibilitando agilidade e fluidez no seu dia à dia.<br><br>Arquitetura utilizada: MVC<br>Biblioteca : Bootstrap",
    ]);

    return parent::getPage("Sobre > E2000", $content);
  }
}
