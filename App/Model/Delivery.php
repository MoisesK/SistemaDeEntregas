<?php

namespace App\Model;

use \WilliamCosta\DatabaseManager\Database;

class Delivery
{
	private int $id;
	private string $title;
	private string $deadline;
	private string $descript;
	private string $stats;
	private string $place;

	public function newDelivery(string $title, string $deadline, string $descript, string $place)
	{
		$this->setTitle($title);
		$this->setDeadline($deadline);
		$this->setDescript($descript);
		$this->setStats("Pendente");
		$this->setPlace($place);
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function getTitle(): string
	{
		return $this->title;
	}

	private function setTitle(string $title)
	{
		$this->title = $title;
	}

	public function getDeadline(): string
	{
		return $this->deadline;
	}

	private function setDeadline(string $Deadline)
	{
		$this->deadline = $Deadline;
	}

	public function getDescript(): string
	{
		return $this->descript;
	}

	private function setDescript(string $Descript)
	{
		$this->descript = $Descript;
	}

	public function getStats(): string
	{
		return $this->stats;
	}

	private function setStats(string $stats)
	{
		$this->stats = $stats;
	}


	public function getPlace(): string
	{
		return $this->place;
	}

	private function setPlace(string $place)
	{
		$this->place = $place;
	}

	public function create()
	{
		$this->id = (new Database('entregas'))->insert([
			'titulo' => $this->title,
			'prazo' => $this->deadline,
			'descricao' => $this->descript,
			'status' => $this->stats,
			'local' => $this->place
		]);

		return true;
	}

	public static function getDelivery($where = null, $order = null, $limit = null, $fields = '*')
	{
		return (new Database('entregas'))->select($where, $order, $limit, $fields);
	}
}
