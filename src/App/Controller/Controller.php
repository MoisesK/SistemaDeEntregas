<?php

namespace src\App\Controller;

use src\App\Routes\Request;
use src\App\Util\Pagination;
use src\App\Util\View;

class Controller
{
  public static function getPage($title, $content): string
  {
    //Método responsável por retornar o conteúdo(VIEW) da página genérica.
    return View::render('page', [
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

    $queryParams = $request->getQueryParams();

    foreach ($pages as $page) {
      $queryParams['page'] = $page['page'];
      $link = "?" . http_build_query($queryParams);

      $links .= View::render('pagination/link', [
        "page" => $page['page'],
        "link" => $link,
        'active' => $page['current'] ? 'active' : ''
      ]);
    }

    return View::render('pagination/box', [
      "links" => $links
    ]);
  }

  private static function getHeader(): string
  {
    return View::render("header");
  }

  private static function getFooter(): string
  {
    return View::render("footer");
  }
}
