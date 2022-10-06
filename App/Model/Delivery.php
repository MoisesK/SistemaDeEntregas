<?php

namespace App\Model;

use App\Util\View;
use PDOStatement;
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

	function getId(): int
	{
		return $this->id;
	}

	function getTitle(): string
	{
		return $this->title;
	}

	function setTitle(string $title): self
	{
		$this->title = $title;
		return $this;
	}

	function getDeadline(): string
	{
		return $this->Deadline;
	}

	function setDeadline(string $Deadline): self
	{
		$this->Deadline = $Deadline;
		return $this;
	}

	function getDescript(): string
	{
		return $this->Descript;
	}

	function setDescript(string $Descript): self
	{
		$this->Descript = $Descript;
		return $this;
	}

	function getStats(): string
	{
		return $this->stats;
	}

	function setStats(string $stats): self
	{
		$this->stats = $stats;
		return $this;
	}


	function getPlace(): string
	{
		return $this->place;
	}

	function setPlace(string $place): self
	{
		$this->place = $place;
		return $this;
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
