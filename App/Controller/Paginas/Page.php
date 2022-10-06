<?php

namespace App\Controller\Paginas;

use App\Utilitarios\View;

class Page{

//Método responsável por retornar o conteúdo(VIEW) da página genérica.
  public static function getPage($title,$conteudo) :string
  {
    return View::render('Paginas/page',[
      "title" => $title,
      "header" => self::getHeader(),
      "conteudo" => $conteudo,
      "footer" => self::getFooter()
    ]);
  }


  private static function getHeader() :string
  {
    return view::render("Paginas/header");
  }

  private static function getFooter() :string
  {
    return view::render("Paginas/footer");
  }
}
