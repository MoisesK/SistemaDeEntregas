<?php

namespace App\Controller\Paginas;

use App\Utilitarios\View;

class CadastraEntregas extends Page{

//Metodo qu retornar o conteúdo(View) da PÁGINA HOME;
  public static function getCadastraEntregas() :string
  {
    //Retorna a View da Home.
    $conteudo = View::render('Paginas/CadastroEntregas',[
      "HomeName" => "Cadastro de Entregas",
    ]);

    //Retorna a View da Página
    return parent::getPage("Cadastrar Entregas > E2000", $conteudo);
  }

}



 ?>
