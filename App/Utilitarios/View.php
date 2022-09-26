<?php

namespace App\Utilitarios;

class View{

  // Metodo responsável por retornar o conteúdo de uma view.
  private static function getContentView($view){
    $arquivo = __DIR__ . '/../../Resources/View/Paginas'.$view.'.php';

  //Verifica se o repositório existe e retorna ele.
  return file_exists($arquivo) ? file_get_contents($arquivo) : '';
    }

  // Método responsável por retornar o conteúdo renderizado de uma view.
  public static function render($view, $vars = []){
    //Conteúdo da VIEW
    $conteudoView = self::getContentView($view);

    //Chaves do arrau de variaveis

    $chaves = array_keys($vars);
    $chaves = array_map(function($item)){
      return '{{'. $item .'}}';
    },$chaves);

    //Retorna o conteúdo Renderizdo
    return str_replace($chaves,array_values($vars),$conteudoView);
  }

}



 ?>
