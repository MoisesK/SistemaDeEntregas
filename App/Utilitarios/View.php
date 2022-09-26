<?php

namespace App\Utilitarios;

class View{

  // Metodo responsável por retornar o conteúdo de uma view.
  private static function getContentView($view) :string
  {
    $arquivo = __DIR__ . '/../../Resources/View/'.$view.'.php';

    //Verifica se o repositório existe e retorna ele.
    return file_exists($arquivo) ? file_get_contents($arquivo) : '';

  }

  // Método responsável por retornar o conteúdo renderizado de uma view.
  public static function render($view, $vars = []) :string
  {
    //Conteúdo da VIEW
    $conteudoView = self::getContentView($view);

    //Chaves do array de variaveis

    $chaves = array_keys($vars);
    $chaves = array_map(function($item){
        return '{{'.$item.'}}';
    },$chaves);

    //Retorna o conteúdo Renderizdo
    return str_replace($chaves,array_values($vars),$conteudoView);
  }

}



 ?>
