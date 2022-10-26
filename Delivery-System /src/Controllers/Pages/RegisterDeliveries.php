<?php

namespace src\Controllers\Pages;


use src\App\Util\View;
use src\Model\Delivery;
use src\Model\Helper;

class RegisterDeliveries extends Page
{

  public static function getRegisterDeliveries(): string
  { //Metodo que retornar o conteúdo(View) da PÁGINA Cadastro;
    $content = View::render('Pages/RegisterDeliveries', [
      "PageName" => "Registro de Entregas",
      "DescricaoPage" => "Área de cadastro de novas entregas!",
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
