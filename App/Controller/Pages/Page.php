<?php

namespace App\Controller\Pages;

use App\Util\View;

class Page
{
  public static function getPage($title, $content): string
  {
    //Método responsável por retornar o conteúdo(VIEW) da página genérica.
    return View::render('Pages/Page', [
      "title" => $title,
      "header" => self::getHeader(),
      "conteúdo" => $content,
      "footer" => self::getFooter()
    ]);
  }


  private static function getHeader(): string
  {
    return View::render("Pages/header");
  }

  private static function getFooter(): string
  {
    return View::render("Pages/footer");
  }
}
