<?php

namespace Controllers\Pages;


use App\Util\View;
use Model\Delivery;
use Model\Helper;

class RegisterDeliveries extends Page
{

  public static function getRegisterDeliveries(): string
  { //Metodo que retornar o conteúdo(View) da PÁGINA Cadastro;
    $content = View::render('Pages/RegisterDeliveries', [
      "PageName" => "Registro de Entregas",
      "DescricaoPage" => "Área de cadastro de novas entregas!",
      "Alerts" => GetSessionMessage(),
      "FormDeliveries" => View::render('Pages/RegisterDeliveries/Form'),
    ]);

    return parent::getPage("Cadastrar Entregas > E2000", $content);
  }


  public static function insertDelivery($request): mixed
  {
    $postVars = $request->getPostVars();

    $params = [
      "title" => ItSanitizeVar($postVars['title-delivery']),
      "deadline" => ItSanitizeVar($postVars['deadline-delivery']),
      "description" => ItSanitizeVar($postVars['description-delivery']),
      "place" => ItSanitizeVar($postVars['place-delivery'])
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
