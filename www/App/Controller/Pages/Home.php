<?php

namespace App\Controller\Pages;

use App\Model\Helper;
use App\Http\Response;
use App\Util\View;
use App\Model\Delivery;
use Exception;


class Home extends Page
{
	public static function getHome(): string
	{
		//Metodo que retornar o conteúdo(View) da PÁGINA HOME
		$content = View::render('Pages/Home', [
			"HomeName" => "Lista de Entregas",
			"Alerts" => Helper::getSMessage(),
			"Items" => self::getDeliveryItems(),
		]);

		return parent::getPage("Home > E2000", $content);
	}

	public static function getDeliveryItems()
	{
		$items = '';

		$results = Delivery::read(null, 'id DESC');

		// Renderiza os Items
		while ($obDelivery = $results->fetchObject(Delivery::class)) {

			$items .= View::render('Pages/Home/Items', [
				"Deadline" => date('H:i d/m/yy', strtotime($obDelivery->getDeadline())),
				"Title" => $obDelivery->getTitle(),
				"Description" => $obDelivery->getDescript(),
				"Place" => $obDelivery->getPlace(),
				"Stats" => $obDelivery->getStats(),
				"Actions" => View::render('Pages/Home/Actions', [
					"ButtonDelete" => View::render('Modals/ModalDelete', [
						"id" => $obDelivery->getId(),
						"title" => $obDelivery->getTitle()
					]),
					"ButtonEdit" => View::render('Modals/ModalEdit', [
						"id" => $obDelivery->getId(),
						"deadline-delivery" => date('H:i d/m/yy', strtotime($obDelivery->getDeadline())),
						"title-delivery" => $obDelivery->getTitle(),
						"description-delivery" => $obDelivery->getDescript(),
						"place-delivery" => $obDelivery->getPlace(),
						"stats-delivery" => $obDelivery->getStats(),
					]),
				])
			]);
		}

		return $items;
	}

	public static function acoesDelivery($request)
	{
		$postVars = $request->getPostVars();

		session_start();

		switch ($postVars) {
			case isset($postVars['deleteButton']):
				$dl = new Delivery();
				$dl->delete($postVars['deleteButton']);
				$_SESSION['Delete'] = "Item Excluído com Sucesso!";
				break;

			case isset($postVars['editButton']):
				$dl = new Delivery();

				$dl->update(
					$postVars['id-delivery'],
					Helper::itSanitizeVar($postVars['title-delivery']),
					Helper::itSanitizeVar($postVars['deadline-delivery']),
					Helper::itSanitizeVar($postVars['description-delivery']),
					Helper::itSanitizeVar($postVars['stats-delivery']),
					Helper::itSanitizeVar($postVars['place-delivery'])
				);

				$_SESSION['Edit'] = "Item Editado com Sucesso!";
				break;
		}

		return self::getHome();
	}
}
