<?php

namespace App\Controller\Pages;


use App\Util\View;
use App\Model\Delivery;
use App\Model\Helper;

class RegisterDeliveries extends Page
{

  public static function getRegisterDeliveries(): string
  { //Metodo que retornar o conteúdo(View) da PÁGINA Cadastro;
    $content = View::render('Pages/RegisterDeliveries', [
      "HomeName" => "Registro de Entregas",
      "Alerts" => Helper::getSMessage(),
      "FormDeliveries" => View::render('Pages/RegisterDeliveries/Form'),
    ]);

    return parent::getPage("Cadastrar Entregas > E2000", $content);
  }


  public static function insertDelivery($request): mixed
  {
    $postVars = $request->getPostVars();

    $params = [
      "title" => Helper::itSanitizeVar($postVars['title-delivery']),
      "deadline" => Helper::itSanitizeVar($postVars['deadline-delivery']),
      "description" => Helper::itSanitizeVar($postVars['description-delivery']),
      "place" => Helper::itSanitizeVar($postVars['place-delivery'])
    ];

    $newDelivery = new Delivery();

    $newDelivery->newDelivery(
      $params['title'],
      $params['deadline'],
      $params['description'],
      $params['place']
    );

    $newDelivery->create();

    $_SESSION['create'] = "Entregas Cadastrada com Sucesso!";

    return self::getRegisterDeliveries();
  }
}
