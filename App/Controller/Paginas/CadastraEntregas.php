<?php

namespace App\Controller\Paginas;

use App\Utilitarios\View;
use App\Model\Entrega;

class CadastraEntregas extends Page{

  // Método responsável por renderizar os itens de entregas

//Metodo qu retornar o conteúdo(View) da PÁGINA HOME;
  public static function getCadastraEntregas() :string
  {
    //Retorna a View da Home.
    $conteudo = View::render('Paginas/CadastroEntregas',[
      "HomeName" => "Cadastro de Entregas",
      "FormularioEntrega" => View::render('Paginas/CadastroEntregas/Form'),
    ]);

    //Retorna a View da Página
    return parent::getPage("Cadastrar Entregas > E2000", $conteudo);
  }

  //
  public static function insertEntrega($request) :string
  {
    // Dados recebidos do POST
    $postVars = $request->getPostVars();
    
    // Validação de dados enviados via POST

    // Realizar validação

    // Nova instancia de Entregas para cadastrar Entregas
    $ne = new Entrega();
    $ne->newEntrega($postVars['titulo-entrega'],$postVars['prazo-entrega'],$postVars['descricao-entrega'],$postVars['local-entrega']);
    
    $ne->cadastrar();

    // Retornar os dados
    return self::getCadastraEntregas();
  }

}



 ?>
