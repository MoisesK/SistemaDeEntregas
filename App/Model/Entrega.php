<?php

namespace App\Model;

use App\Utilitarios\View;
use PDOStatement;
use \WilliamCosta\DatabaseManager\Database;
class Entrega{
    private int $id;
    private string $titulo;
    private string $prazo;
    private string $descricao;
    private string $status;
    private string $local;

    public function newEntrega(string $titulo, string $prazo, string $descricao, string $local) 
    {
        // $this->setEntregador($entregador);
        $this->setTitulo($titulo);
        $this->setPrazo($prazo);
        $this->setDescricao($descricao);
        $this->setStatus("Pendente");
        $this->setLocal($local);

    }
    
	function getId(): int {
		return $this->id;
	}
	
	function getTitulo(): string {
		return $this->titulo;
	}

	function setTitulo(string $titulo): self {
		$this->titulo = $titulo;
		return $this;
	}

	function getPrazo(): string {
		return $this->prazo;
	}

	function setPrazo(string $prazo): self {
		$this->prazo = $prazo;
		return $this;
	}

	function getDescricao(): string {
		return $this->descricao;
	}

	function setDescricao(string $descricao): self {
		$this->descricao = $descricao;
		return $this;
	}
	
	function getStatus(): string {
		return $this->status;
	}

	function setStatus(string $status): self {
		$this->status = $status;
		return $this;
	}
	

	function getLocal(): string {
		return $this->local;
	}
	
	function setLocal(string $local): self {
		$this->local = $local;
		return $this;
	}

	// Método reponsável por cadastrar uma nova entrega no banco de dados / CREATE
    public function cadastrar()
    {
        // Insert no Banco de dados
        $this->id = (new Database('entregas'))->insert([
            'titulo' => $this->titulo,
            'prazo' => $this->prazo,
            'descricao' => $this->descricao,
            'status' => $this->status,
            'local' => $this->local
        ]);

        // Sucesso
        return true;
    }

	/* Método responsável por retornar as Entregas
	* @return PDOStatement
	*/
	public static function getEntregas($where = null, $order = null, $limit = null, $fields = '*') 
	{
		return (new Database('entregas'))->select($where,$order,$limit,$fields);
	}
	
}



?>