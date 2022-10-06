<?php

namespace App\Controller\Pages;

use App\Utilitarios\View;
use App\Model\Delivery;


class Home extends Page
{
	public static function getHome(): string
	{
		//Metodo que retornar o conteúdo(View) da PÁGINA HOME
		$content = View::render('Pages/Home', [
			"HomeName" => "Lista de Entregas",
			"Items" => self::getDeliveryItems(),
		]);

		return parent::getPage("Home > E2000", $content);
	}

	public static function getDeliveryItems()
	{
		$itens = '';

		$results = Delivery::getDelivery(null, 'id DESC');

		// Renderiza os Items
		while ($obDelivery = $results->fetchObject(Delivery::class)) {
			$itens .= View::render('Paginas/Home/Itens', [
				"PrazoEntrega" => date('d/m/y', strtotime($obDelivery->getDeadline())),
				"TituloEntrega" => $obDelivery->getTitle(),
				"DescriçãoEntrega" => $obDelivery->getDescript(),
				"LocalEntrega" => $obDelivery->getPlace(),
				"StatusEntrega" => $obDelivery->getStats(),
				"Ações" => View::render('Pages/Home/Actions')
			]);
		}

		return $itens;
	}
}
