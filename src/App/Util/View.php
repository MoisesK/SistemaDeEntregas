<?php

namespace src\App\Util;

class View
{
  private static array $vars = [];

  public static function init($vars = [])
  {   // Método responsável por definir os dados iniciais da classe
    self::$vars = $vars;
  }

  private static function getContentView($view): string
  {
    $archive = __DIR__ . '/../../view/' . $view . '.php';

    //Verifica se o arquivo existe e retorna ele.
    return file_exists($archive) ? file_get_contents($archive) : '';
  }

  public static function render($view, $vars = []): string
  { // Método responsável por retornar o conteúdo renderizado de uma view.

    $contentView = self::getContentView($view);

    $vars = array_merge(self::$vars, $vars);

    $keys = array_keys($vars);
    $keys = array_map(function ($item) {
      return '{{' . $item . '}}';
    }, $keys);

    //Retorna o conteúdo Renderizdo
    return str_replace($keys, array_values($vars), $contentView);
  }
}
