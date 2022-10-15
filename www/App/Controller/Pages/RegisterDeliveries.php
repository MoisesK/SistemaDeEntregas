<?php

namespace App\Controller\Pages;


use App\Util\View;
use App\Model\Delivery;
use PHP_CodeSniffer\Filters\Filter;
use App\Model\Helper;

class RegisterDeliveries extends Page
{

  public static function getRegisterDeliveries(): string
  {
    //Metodo que retornar o conteúdo(View) da PÁGINA Cadastro;

    $content = View::render('Pages/RegisterDeliveries', [
      "HomeName" => "Registro de Entregas",
      "FormDeliveries" => View::render('Pages/RegisterDeliveries/Form'),
    ]);

    return parent::getPage("Cadastrar Entregas > E2000", $content);
  }


  public static function insertDelivery($request): string
  {
    $postVars = $request->getPostVars();

    $params = [
      "title" => Helper::itSanitizeVar($postVars['title-delivery']),
      "deadline" => Helper::itSanitizeVar($postVars['deadline-delivery']),
      "description" => Helper::itSanitizeVar($postVars['description-delivery']),
      "place" => Helper::itSanitizeVar($postVars['place-delivery'])
    ];

    $ne = new Delivery();
    $ne->newDelivery(
      $params['title'],
      $params['deadline'],
      $params['description'],
      $params['place']
    );

    $ne->create();

    session_start();
    $_SESSION["Create"] = "Entrega Cadastrada com Sucesso!";

    header("Refresh: 0; url=/");

    // Retornar os dados
    return self::getRegisterDeliveries();
  }
}
