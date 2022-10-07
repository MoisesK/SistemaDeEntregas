<?php

namespace App\Controller\Pages;

use App\Util\View;
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
		$items = '';

		$results = Delivery::getDelivery(null, 'id DESC');
		
		// Renderiza os Items
		while ($obDelivery = $results->fetchObject(Delivery::class)) {
			
			$items .= View::render('Pages/Home/Items', [
				"Deadline" => date('d/m/y', strtotime($obDelivery->getDeadline())),
				"Title" => $obDelivery->getTitle(),
				"Description" => $obDelivery->getDescript(),
				"Place" => $obDelivery->getPlace(),
				"Stats" => 'teste',
				"Actions" => View::render('Pages/Home/Actions')
			]);
		}

		return $items;
	}
}
