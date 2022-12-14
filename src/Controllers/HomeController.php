<?php

namespace src\Controllers;

use src\App\Util\Helpers;
use src\App\Util\View;
use src\Model\Delivery;
use src\App\Util\Pagination;
use src\App\Routes\Request;
use src\App\Controller\Controller;

class HomeController extends Controller
{
	public static function getHome(): string
	{
		//Metodo que retornar o conteúdo(View) da PÁGINA HOME
		$content = View::render('home/home', [
			"HomeName" => "Lista de Entregas",
			"DescricaoPage" => "Visão geral de Entregas cadastradas!",
			"Alerts" => Helpers::getSessionMessage(),
			"Items" => self::getDeliveryItems(),
			"Pagination" => parent::getPagination(),
		]);

		return parent::getPage("Home > E2000", $content);
	}

	public static function getDeliveryItems()
	{
		$items = '';

		$results = Delivery::read(null, 'id DESC', Pagination::getPagination()->getLimit());

		// Renderiza os Items
		while ($obDelivery = $results->fetchObject(Delivery::class)) {

			$items .= View::render('home/items', [
				"Deadline" => date("d/m/yy" . " á\s " . "H:i", strtotime($obDelivery->getDeadline())),
				"Title" => $obDelivery->getTitle(),
				"Description" => $obDelivery->getDescript(),
				"Place" => $obDelivery->getPlace(),
				"Stats" => $obDelivery->getStats(),
				"Actions" => View::render('home/actions', [
					"ButtonDelete" => View::render('modals/modalDelete', [
						"id" => $obDelivery->getId(),
						"title" => $obDelivery->getTitle()
					]),
					"ButtonEdit" => View::render('modals/modalEdit', [
						"id" => $obDelivery->getId(),
						"deadline-delivery" => date($obDelivery->getDeadline()),
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

	public static function actionsDelivery($request)
	{
		$postVars = $request->getPostVars();

		switch ($postVars) {
			case isset($postVars['deleteButton']):
				$dl = new Delivery();
				$dl->delete($postVars['deleteButton']);
				$_SESSION['delete'] = "Item Excluído com Sucesso!";
				break;

			case isset($postVars['editButton']):
				$dl = new Delivery();

				$dl->update(
					$postVars['id-delivery'],
					Helpers::ItSanitizeVar($postVars['title-delivery']),
					Helpers::ItSanitizeVar($postVars['deadline-delivery']),
					Helpers::ItSanitizeVar($postVars['description-delivery']),
					Helpers::ItSanitizeVar($postVars['stats-delivery']),
					Helpers::ItSanitizeVar($postVars['place-delivery'])
				);

				$_SESSION['edit'] = "Item Editado com Sucesso!";
				break;
		}

		return self::getHome();
	}
}
