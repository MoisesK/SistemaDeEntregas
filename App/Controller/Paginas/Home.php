<?php

namespace App\Controller\Paginas;

use App\Utilitarios\View;
use App\Model\Entrega;


class Home extends Page{

  

//Metodo qu retornar o conteúdo(View) da PÁGINA HOME;
  public static function getHome() :string
  {
    //Retorna a View da Home.
    $conteudo = View::render('Paginas/Home',[
      "HomeName" => "Lista de Entregas",
      "Items" => self::getEntregasItems(),
    ]);

    //Retorna a View da Página
    return parent::getPage("Home > E2000", $conteudo);
  }

  // Método responsável por obter a render dos itens de entregas para a página
	public static function getEntregasItems() 
	{
	  // Entregas
	  $itens = '';
  
	  // Resultados
		  $results = Entrega::getEntregas(null,'id DESC');
  
		  // Renderiza os Items
		  while($obEntrega = $results->fetchObject(Entrega::class)){
			  $itens .= View::render('Paginas/Home/Itens',[
			"PrazoEntrega" => date('d/m/y',strtotime($obEntrega->getPrazo())),
			"TituloEntrega" => $obEntrega->getTitulo(),
			"DescriçãoEntrega" => $obEntrega->getDescricao(),
			"LocalEntrega" => $obEntrega->getLocal(),
			"StatusEntrega" => $obEntrega->getStatus(),
			"Ações" => View::render('Paginas/Home/Acoes')
			]);
	  }
  
	  // Retorna os itens
	  return $itens;
	}

	//Método responsável por Excluir uma entrega


}



 ?>
