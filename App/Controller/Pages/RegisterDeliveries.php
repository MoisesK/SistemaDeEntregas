<?php

namespace App\Controller\Pages;

use App\Util\View;
use App\Model\Delivery;

class RegisterDeliveries extends Page
{

  public static function getRegisterDeliveries(): string
  {
    //Metodo que retornar o conteúdo(View) da PÁGINA HOME;

    $content = View::render('Paginas/RegisterDeliveries', [
      "HomeName" => "Registro de Entregas",
      "FormDeliveries" => View::render('Pages/RegisterDeliveries/Form'),
    ]);

    return parent::getPage("Cadastrar Entregas > E2000", $content);
  }

  public static function insertDelivery($request): string
  {
    $postVars = $request->getPostVars();

    // LEMBRETE : CRIAR sanitização dos dados recebido no PostVars

    $ne = new Delivery();
    $ne->newDelivery(
      $postVars['titulo-entrega'],
      $postVars['prazo-entrega'],
      $postVars['descricao-entrega'],
      $postVars['local-entrega']
    );

    $ne->create();

    // Retornar os dados
    return self::getRegisterDeliveries();
  }
}
