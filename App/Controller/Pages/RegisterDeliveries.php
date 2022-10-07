<?php

namespace App\Controller\Pages;

use App\Util\View;
use App\Model\Delivery;

class RegisterDeliveries extends Page
{

  public static function getRegisterDeliveries(): string
  {
    //Metodo que retornar o conteúdo(View) da PÁGINA HOME;

    $content = View::render('Pages/RegisterDeliveries', [
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
      $postVars['title-delivery'],
      $postVars['deadline-delivery'],
      $postVars['description-delivery'],
      $postVars['place-delivery']
    );

    $ne->create();

    // Retornar os dados
    return self::getRegisterDeliveries();
  }
}
