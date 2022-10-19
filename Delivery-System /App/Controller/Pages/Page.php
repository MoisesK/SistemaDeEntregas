<?php

namespace App\Controller\Pages;

use App\Http\Request;
use App\Http\Router;
use App\Util\Pagination;
use App\Util\View;

class Page
{
  public static function getPage($title, $content): string
  {
    //Método responsável por retornar o conteúdo(VIEW) da página genérica.
    return View::render('Pages/Page', [
      "title" => $title,
      "header" => self::getHeader(),
      "content" => $content,
      "footer" => self::getFooter()
    ]);
  }

  public static function getPagination()
  {
    $pages = Pagination::getPagination()->getPages();

    if (count($pages) <= 1) {
      return '';
    }

    $links = '';

    $request = new Request();
    // $url = $request->getRouter();
  }

  private static function getHeader(): string
  {
    return View::render("Pages/Header");
  }

  private static function getFooter(): string
  {
    return View::render("Pages/Footer");
  }
}
