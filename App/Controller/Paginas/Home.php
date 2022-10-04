<?php

namespace App\Controller\Paginas;

use App\Utilitarios\View;

class Home extends Page{

  

//Metodo qu retornar o conteúdo(View) da PÁGINA HOME;
  public static function getHome() :string
  {
    //Retorna a View da Home.
    $conteudo = View::render('Paginas/Home',[
      "HomeName" => "Lista de Entregas",
    ]);

    //Retorna a View da Página
    return parent::getPage("Home > E2000", $conteudo);
  }

}



 ?>
