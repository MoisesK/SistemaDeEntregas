<?php

namespace src\Model;

use \WilliamCosta\DatabaseManager\Database;

class Delivery
{
	private int $id;
	private string $title;
	private string $deadline;
	private string $descript;
	private string $stats;
	private string $place;


	public function newDelivery(string $title, string $deadline, string $descript, string $place, string $stats = "Pendente")
	{
		$this->setTitle($title);
		$this->setDeadline($deadline);
		$this->setDescript($descript);
		$this->setStats($stats);
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


	public function create(): bool
	{
		$this->id = (new Database('deliveries'))->insert([
			'title' => $this->title,
			'deadline' => $this->deadline,
			'descript' => $this->descript,
			'stats' => $this->stats,
			'place' => $this->place
		]);

		return true;
	}

	public static function read($where = null, $order = null, $limit = null, $fields = '*'): mixed
	{
		return (new Database('deliveries'))->select($where, $order, $limit, $fields);
	}

	public function update(int $id, $title, $deadline, $descri, $stats, $pla): bool
	{
		$success = (new Database('deliveries'))->update($id, $title, $deadline, $descri, $stats, $pla);

		return $success;
	}

	public function delete($id): bool
	{
		$item = (new Database('deliveries'))->delete("id=" . $id);

		return $item;
	}
}
