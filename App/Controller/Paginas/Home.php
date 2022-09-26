<?php

namespace App\Controller\Paginas;

use App\Utilitarios\View;

class Home extends Page{

//Metodo qu retornar o conteúdo(View) da Home;
  public static function getHome() :string
  {
    //Retorna a View da Home.
    $conteudo = View::render('Paginas/Home',[
      "HomeName" => "Sistema de Entregas",
      "DescriçãoHome" => "Seja bem vindo ao Entregas 2000,
      o Sistema de entregas perfeito para seu negócio."
    ]);

    //Retorna a View da Página
    return parent::getPage("Home - Entregas 2000", $conteudo);
  }

}



 ?>
